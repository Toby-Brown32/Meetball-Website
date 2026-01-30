<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('season_id')->constrained('seasons');
            $table->unsignedBigInteger('game_type_id');
            $table->date('match_date');
            $table->integer('salmon_goals');
            $table->integer('bleu_goals');
            $table->foreignId('player_of_match_id')->constrained('players');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
