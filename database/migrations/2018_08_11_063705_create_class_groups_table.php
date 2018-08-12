<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_groups', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('teacher_id');
            $table->foreign('teacher_id')->references('id')->on('carolinians')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('subject_id');
            $table->foreign('subject_id')->references('id')->on('subjects')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('schedule_id');
            $table->foreign('schedule_id')->references('id')->on('schedules')
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
        Schema::dropIfExists('class__groups');
    }
}
