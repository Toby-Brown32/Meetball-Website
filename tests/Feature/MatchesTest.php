<?php

use App\Models\FootballMatch;
use App\Models\Player;
use App\Models\Season;

use function Pest\Laravel\get;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

describe('Public Matches Page', function () {
    it('displays the matches page', function () {
        $response = get(route('matches.index'));

        $response->assertStatus(200);
        $response->assertViewIs('matches.index');
    });

    it('displays matches with player data', function () {
        $season = Season::factory()->create();
        $match = FootballMatch::factory()->create([
            'season_id' => $season->id,
            'salmon_goals' => 3,
            'bleu_goals' => 2,
        ]);
        $player = Player::factory()->create();

        \DB::table('match_player')->insert([
            'match_id' => $match->id,
            'player_id' => $player->id,
            'team' => 'Salmons',
            'played' => 1,
            'reserve' => 0,
            'goals' => 2,
            'assists' => 1,
            'season_id' => $season->id,
        ]);

        $response = get(route('matches.index'));

        $response->assertStatus(200);
        $response->assertViewHas('matches');
        $matches = $response->viewData('matches');
        expect($matches->first()->id)->toBe($match->id);
    });

    it('orders matches by date descending', function () {
        $season = Season::factory()->create();
        $match1 = FootballMatch::factory()->create([
            'season_id' => $season->id,
            'match_date' => '2026-01-01'
        ]);
        $match2 = FootballMatch::factory()->create([
            'season_id' => $season->id,
            'match_date' => '2026-01-10'
        ]);

        $response = get(route('matches.index'));

        $response->assertStatus(200);
        $matches = $response->viewData('matches');
        expect($matches->first()->id)->toBe($match2->id);
        expect($matches->last()->id)->toBe($match1->id);
    });

    it('loads match players with player relationships', function () {
        $season = Season::factory()->create();
        $match = FootballMatch::factory()->create(['season_id' => $season->id]);
        $player = Player::factory()->create();

        \DB::table('match_player')->insert([
            'match_id' => $match->id,
            'player_id' => $player->id,
            'team' => 'Salmons',
            'played' => 1,
            'reserve' => 0,
            'goals' => 0,
            'assists' => 0,
            'season_id' => $season->id,
        ]);

        $response = get(route('matches.index'));

        $response->assertStatus(200);
        $matches = $response->viewData('matches');
        $matchData = $matches->first();
        expect($matchData->players)->toHaveCount(1);
        expect($matchData->players->first()->id)->toBe($player->id);
    });

    it('displays empty state when no matches exist', function () {
        $response = get(route('matches.index'));

        $response->assertStatus(200);
        $matches = $response->viewData('matches');
        expect($matches->count())->toBe(0);
    });

    it('displays individual match details', function () {
        $season = Season::factory()->create();
        $match = FootballMatch::factory()->create([
            'season_id' => $season->id,
            'salmon_goals' => 3,
            'bleu_goals' => 2,
        ]);
        $player = Player::factory()->create();

        \DB::table('match_player')->insert([
            'match_id' => $match->id,
            'player_id' => $player->id,
            'team' => 'Salmons',
            'played' => 1,
            'reserve' => 0,
            'goals' => 2,
            'assists' => 1,
            'season_id' => $season->id,
        ]);

        $response = get(route('matches.show', $match));

        $response->assertStatus(200);
        $response->assertViewIs('matches.show');
        $response->assertViewHas('match');
        $matchData = $response->viewData('match');
        expect($matchData->id)->toBe($match->id);
        expect($matchData->players)->toHaveCount(1);
    });
});