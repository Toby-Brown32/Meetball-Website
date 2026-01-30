<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MatchPlayer extends Model
{
    use HasFactory;

    protected $table = 'match_player';

    /**
     * @var list<string>
     */
    protected $fillable = [
        'match_id',
        'player_id',
        'season_id',
        'team',
        'played',
        'reserve',
        'goals',
        'assists',
        'player_of_match',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'played' => 'bool',
        'reserve' => 'bool',
        'player_of_match' => 'bool',
        'goals' => 'int',
        'assists' => 'int',
        'match_id' => 'int',
        'player_id' => 'int',
        'season_id' => 'int',
    ];

    public function match(): BelongsTo
    {
        return $this->belongsTo(FootballMatch::class, 'match_id');
    }

    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class);
    }

    public function season(): BelongsTo
    {
        return $this->belongsTo(Season::class);
    }
}
