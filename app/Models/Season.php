<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\FootballMatch;

class Season extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
        * @var list<string>
     */
    protected $fillable = ['name', 'start_date', 'end_date'];

    /**
     * Get the matches for the season.
     * @return HasMany
     */
    public function matches(): HasMany
    {
        return $this->hasMany(FootballMatch::class);
    }
}
