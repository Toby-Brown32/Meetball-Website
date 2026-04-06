<?php

declare(strict_types=1);

use App\Actions\Draw\GetGuaranteedPlayers;
use App\Models\Player;
use App\Models\FootballMatch;
use Illuminate\Support\Facades\DB;

describe('GetGuaranteedPlayers', function () {
    beforeEach(function () {
        DB::table('match_player')->truncate();
        DB::table('matches')->truncate();
        Player::truncate();
    });

    it('guarantees Andy Brown if present', function () {
        $andy = Player::factory()->create(['id' => 34, 'forename' => 'Andy', 'surname' => 'Brown']);
        $others = Player::factory()->count(10)->create();
        $players = Player::all();
        $action = new GetGuaranteedPlayers();
        $result = $action($players);
        $guaranteedIds = $result['guaranteed']->pluck('id');
        expect($guaranteedIds)->toContain(34);
    });

    it('guarantees last week\'s player of the match', function () {
        $motm = Player::factory()->create();
        $others = Player::factory()->count(5)->create();
        $match = FootballMatch::factory()->create(['player_of_match_id' => $motm->id, 'match_date' => now()]);
        $players = Player::all();
        $action = new GetGuaranteedPlayers();
        $result = $action($players);
        $guaranteedIds = $result['guaranteed']->pluck('id');
        expect($guaranteedIds)->toContain($motm->id);
    });

    it('guarantees players with missed_games > 0', function () {
        $missed = Player::factory()->create(['missed_games' => 2]);
        $others = Player::factory()->count(5)->create(['missed_games' => 0]);
        $players = Player::all();
        $action = new GetGuaranteedPlayers();
        $result = $action($players);
        $guaranteedIds = $result['guaranteed']->pluck('id');
        expect($guaranteedIds)->toContain($missed->id);
    });

    it('attaches guarantee reasons to players', function () {
        $missed = Player::factory()->create(['missed_games' => 2]);
        $players = Player::factory()->count(5)->create(['missed_games' => 0]);
        $action = new GetGuaranteedPlayers();
        $result = $action(Player::all());

        $matched = $result['guaranteed']->firstWhere('id', $missed->id);
        expect($matched)->not->toBeNull();
        expect($matched->guaranteed_reasons)->toContain('Missed games (2)');
    });

    it('caps drawn players at 16 and prioritizes higher missed_games', function () {
        $players = collect();
        foreach (range(1, 18) as $missedGames) {
            $players->push(Player::factory()->create(['missed_games' => $missedGames]));
        }

        $action = new GetGuaranteedPlayers();
        $result = $action(Player::all());

        expect($result['drawn']->count())->toBe(16);
        expect($result['guaranteed']->count())->toBe(16);
        expect($result['drawn']->pluck('missed_games'))->not->toContain(1);
        expect($result['drawn']->pluck('missed_games'))->not->toContain(2);
        expect($result['drawn']->pluck('missed_games'))->toContain(18);
        expect($result['drawn']->pluck('missed_games'))->toContain(17);
    });

    it('guarantees first-time players (no match_player record)', function () {
        $firstTimer = Player::factory()->create();
        $others = Player::factory()->count(5)->create();
        $season = \App\Models\Season::factory()->create();
        $match = \App\Models\FootballMatch::factory()->create(['season_id' => $season->id]);
        // Give others a match_player record
        foreach ($others as $p) {
            DB::table('match_player')->insert([
                'match_id' => $match->id,
                'player_id' => $p->id,
                'team' => 'Les Bleus',
                'played' => true,
                'reserve' => false,
                'goals' => 0,
                'assists' => 0,
                'season_id' => $season->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        $players = Player::all();
        $action = new GetGuaranteedPlayers();
        $result = $action($players);
        $guaranteedIds = $result['guaranteed']->pluck('id');
        expect($guaranteedIds)->toContain($firstTimer->id);
    });

    it('fills up to 16 drawn, rest are reserves', function () {
        // Ensure no one is guaranteed: no Andy Brown, no missed_games, no first-timers, no motm
        $players = Player::factory()->count(20)->create(['missed_games' => 0]);
        $season = \App\Models\Season::factory()->create();
        $match = \App\Models\FootballMatch::factory()->create(['season_id' => $season->id]);
        foreach ($players as $p) {
            DB::table('match_player')->insert([
                'match_id' => $match->id,
                'player_id' => $p->id,
                'team' => 'Les Bleus',
                'played' => true,
                'reserve' => false,
                'goals' => 0,
                'assists' => 0,
                'season_id' => $season->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        $players = Player::all();
        $action = new GetGuaranteedPlayers();
        $result = $action($players);
        expect($result['drawn']->count())->toBe(16);
        expect($result['reserves']->count())->toBe(4);
        expect($result['guaranteed']->count())->toBe(0);
    });

    it('guarantees a player whose most recent match was as reserve over missed_games candidates', function () {
        $reservePlayer = Player::factory()->create(['missed_games' => 0]);
        $missedPlayers = Player::factory()->count(18)->create(['missed_games' => 3]);

        $season = \App\Models\Season::factory()->create();
        $match = \App\Models\FootballMatch::factory()->create([
            'season_id' => $season->id,
            'match_date' => now(),
        ]);

        DB::table('match_player')->insert([
            'match_id' => $match->id,
            'player_id' => $reservePlayer->id,
            'team' => 'Les Bleus',
            'played' => false,
            'reserve' => true,
            'goals' => 0,
            'assists' => 0,
            'season_id' => $season->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        foreach ($missedPlayers as $player) {
            DB::table('match_player')->insert([
                'match_id' => $match->id,
                'player_id' => $player->id,
                'team' => 'Les Bleus',
                'played' => true,
                'reserve' => false,
                'goals' => 0,
                'assists' => 0,
                'season_id' => $season->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $players = Player::all();
        $action = new GetGuaranteedPlayers();
        $result = $action($players);

        expect($result['guaranteed']->pluck('id'))->toContain($reservePlayer->id);
    });

    it('no duplicates in guaranteed/drawn', function () {
        $players = Player::factory()->count(16)->create();
        $action = new GetGuaranteedPlayers();
        $result = $action($players);
        $drawnIds = $result['drawn']->pluck('id');
        expect($drawnIds->duplicates())->toHaveCount(0);
    });

    it('if no special cases, fills drawn with randoms', function () {
        $players = Player::factory()->count(10)->create(['missed_games' => 0]);
        $season = \App\Models\Season::factory()->create();
        $match = \App\Models\FootballMatch::factory()->create(['season_id' => $season->id]);
        foreach ($players as $p) {
            DB::table('match_player')->insert([
                'match_id' => $match->id,
                'player_id' => $p->id,
                'team' => 'Les Bleus',
                'played' => true,
                'reserve' => false,
                'goals' => 0,
                'assists' => 0,
                'season_id' => $season->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        $players = Player::all();
        $action = new GetGuaranteedPlayers();
        $result = $action($players);
        expect($result['drawn']->count())->toBe(10);
        expect($result['guaranteed']->count())->toBe(0);
    });
});
