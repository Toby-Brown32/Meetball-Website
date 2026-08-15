<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\FootballMatch;

class Player extends Model
{
    use HasFactory;

    protected $fillable = ['forename', 'surname', 'nickname', 'player_level', 'missed_games'];

    public function matches(): BelongsToMany
    {
        return $this->belongsToMany(FootballMatch::class, 'match_player', 'player_id', 'match_id')->withPivot([
            'team',
            'played',
            'reserve',
            'goals',
            'assists',
            'player_of_match',
            'season_id'
        ]);
    }

    public function playerOfTheMatch(): HasMany
    {
        return $this->hasMany(FootballMatch::class, 'player_of_match_id');
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
