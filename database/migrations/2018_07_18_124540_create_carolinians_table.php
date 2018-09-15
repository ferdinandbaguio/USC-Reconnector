<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaroliniansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carolinians', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('idnumber');
            $table->string('password');
            $table->enum('gender', ['Male', 'Female']);
            $table->text('description');
            $table->string('picture')->nullable();
            $table->enum('usertype', ['Student', 'Teacher', 'Alumni', 'Admin']);
            $table->enum('jobstatus', ['Employed', 'Unemployeed', 
                                       'Part-Time Job', 'Summer Job', 
                                       'On-the-Job Training']); 

            $table->unsignedInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->rememberToken();            
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
        Schema::dropIfExists('carolinians');
    }
}
