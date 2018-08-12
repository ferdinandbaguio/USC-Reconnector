<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarolinianSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carolinian_skills', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('carolinian_id');
            $table->foreign('carolinian_id')->references('id')->on('carolinians')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('skill_id');
            $table->foreign('skill_id')->references('id')->on('skills')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carolinian__skills');
    }
}
