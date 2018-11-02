<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiltersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filters', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('message_id')->nullable();
            $table->foreign('message_id')->references('id')->on('messages')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('post_id')->nullable();
            $table->foreign('post_id')->references('id')->on('posts')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('school_id')->nullable();
            $table->foreign('school_id')->references('id')->on('schools')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('department_id')->nullable();
            $table->foreign('department_id')->references('id')->on('departments')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('course_id')->nullable();
            $table->foreign('course_id')->references('id')->on('courses')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('group_class_id')->nullable();
            $table->foreign('group_class_id')->references('id')->on('group_classes')
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
        Schema::dropIfExists('filters');
    }
}
