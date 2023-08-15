<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_stats', function (Blueprint $table) {
            $table->id();
            $table->datetime('game_date_UTC');
            $table->integer('plateappearance');
            $table->integer('atbat');
            $table->integer('hit');
            $table->integer('home_run');
            $table->integer('four_dead_balls');
            $table->integer('stolen_base');
            $table->float('average'); 
            $table->timestamps(); // created_atとupdated_atカラムが作成される。
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_stats');
    }
};
