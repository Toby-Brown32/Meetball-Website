<?php

use App\Models\FootballMatch;
use App\Models\Season;
use Illuminate\Support\Carbon;

it('shows current season, matches played, and goals scored for that season', function () {
    Carbon::setTestNow(Carbon::parse('2026-01-15'));

    $season = Season::factory()->create([
        'name' => 'Season X',
        'start_date' => '2026-01-01',
        'end_date' => '2026-03-01',
    ]);

    FootballMatch::factory()->create([
        'season_id' => $season->id,
        'salmon_goals' => 2,
        'bleu_goals' => 1,
        'lemon_goals' => 0,
        'green_goals' => 0,
    ]);

    FootballMatch::factory()->create([
        'season_id' => $season->id,
        'salmon_goals' => 0,
        'bleu_goals' => 3,
        'lemon_goals' => 1,
        'green_goals' => 2,
    ]);

    $response = $this->get(route('dashboard', absolute: false));

    $response
        ->assertOk()
        ->assertSeeText('Season X')
        ->assertSeeText('2') // matches played
        ->assertSeeText('9'); // total goals scored (2+1+0+0) + (0+3+1+2)
});
