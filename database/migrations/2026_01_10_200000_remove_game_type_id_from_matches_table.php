<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('matches', function (Blueprint $table) {
            $table->dropColumn('game_type_id');
        });
    }

    public function down()
    {
        Schema::table('matches', function (Blueprint $table) {
            $table->unsignedBigInteger('game_type_id');
        });
    }
};
