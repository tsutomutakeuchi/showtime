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
        Schema::create('player', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_en');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('kana');
            $table->date('birthday');
            $table->integer('height');
            $table->integer('weight'); 
            $table->string('throw_hit'); // 右投げ右打ち
            $table->text('profile');
            $table->string('Thumbnail')->nullable(); // サムネ画像パス。s3使用予定。
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
        Schema::dropIfExists('player');
    }
};
