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
        Schema::table('matches', function (Blueprint $table) {
            $table->integer('salmon_goals')->nullable()->change();
            $table->integer('bleu_goals')->nullable()->change();
            $table->integer('lemon_goals')->nullable()->change();
            $table->integer('green_goals')->nullable()->change();
            $table->foreignId('player_of_match_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('matches', function (Blueprint $table) {
            $table->integer('salmon_goals')->nullable(false)->change();
            $table->integer('bleu_goals')->nullable(false)->change();
            $table->integer('lemon_goals')->nullable(false)->change();
            $table->integer('green_goals')->nullable(false)->change();
            $table->foreignId('player_of_match_id')->nullable(false)->change();
        });
    }
};
