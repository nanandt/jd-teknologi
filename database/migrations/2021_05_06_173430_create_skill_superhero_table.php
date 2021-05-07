<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillSuperheroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_superhero', function (Blueprint $table) {
            $table->foreignId('superhero_id');
            $table->foreignId('skill_id');

            $table->primary(['superhero_id', 'skill_id']);

            $table->foreign('superhero_id')->references('id')->on('super_hero')->onDelete('cascade');
            $table->foreign('skill_id')->references('id')->on('skill')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skill_superhero');
    }
}
