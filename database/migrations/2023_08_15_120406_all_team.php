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
        Schema::create('all_team', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_en');
            $table->string('abbreviation'); // チーム名略称
            $table->string('hometown');
            $table->string('main_sponsor');
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
        Schema::dropIfExists('all_team');
    }
};
