<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_classes', function (Blueprint $table) {
            $table->increments('id');

            $table->string('room')->nullable();
            $table->enum('status', ['Upcoming', 'Ongoing', 'Finished', 'Dissolved']);

            $table->unsignedInteger('subject_id')->nullable();
            $table->foreign('subject_id')->references('id')->on('subjects')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('teacher_id')->nullable();
            $table->foreign('teacher_id')->references('id')->on('users')
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
        Schema::dropIfExists('group_classes');
    }
}
