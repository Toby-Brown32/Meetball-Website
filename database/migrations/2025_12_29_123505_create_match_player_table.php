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
        Schema::create('match_player', function (Blueprint $table) {
            $table->id();
            $table->enum('match_type', ['8 a side', '7 a side', '6 a side', 'academy', 'tournament']);
            $table->foreignId('player_id')->constrained('players');
            $table->enum('team', ['Les Bleus', 'Salmons', 'Lemons', 'Greens']);
            $table->boolean('played');
            $table->boolean('reserve');
            $table->integer('goals');
            $table->integer('assists');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('match_player');
    }
};
