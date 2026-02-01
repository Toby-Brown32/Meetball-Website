<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Season;
use App\Models\Player;

class FootballMatch extends Model
{
    use HasFactory;

    protected $table = 'matches';
    protected $fillable = [
        'season_id',
        'match_date',
        'salmon_goals',
        'bleu_goals',
        'lemon_goals',
        'green_goals',
        'player_of_match_id'
    ];

    public function season(): BelongsTo
    {
        return $this->belongsTo(Season::class);
    }

    public function players(): BelongsToMany
    {
        return $this->belongsToMany(Player::class, 'match_player', 'match_id', 'player_id')->withPivot([
            'team',
            'played',
            'reserve',
            'goals',
            'assists',
            'player_of_match',
            'season_id'
        ]);
    }

    public function playerOfTheMatch(): BelongsTo
    {
        return $this->belongsTo(Player::class, 'player_of_match_id');
    }
}
