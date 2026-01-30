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
        Schema::table('match_player', function (Blueprint $table) {
            $table->foreignId('match_id')->after('id')->constrained('matches');
            $table->foreignId('season_id')->after('match_id')->constrained('seasons');
            $table->boolean('player_of_match')->default(false)->after('assists');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('match_player', function (Blueprint $table) {
            $table->dropForeign(['match_id']);
            $table->dropForeign(['season_id']);
            $table->dropColumn(['match_id', 'season_id', 'player_of_match']);
        });
    }
};
