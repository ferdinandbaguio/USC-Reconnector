<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->float('premidterm', 1, 1);
            $table->float('midterm', 1, 1);
            $table->float('prefinal', 1, 1);
            $table->float('final', 1, 1);

            $table->unsignedInteger('student_id');
            $table->foreign('student_id')->references('id')->on('carolinians')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('class_group_id');
            $table->foreign('class_group_id')->references('id')->on('class_groups')
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
        Schema::dropIfExists('student__classes');
    }
}
