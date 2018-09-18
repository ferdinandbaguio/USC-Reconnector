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
            $table->string('idNumber');
            $table->string('password');
            $table->enum('gender', ['Male', 'Female']);
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastname');
            $table->text('description')->nullable();
            $table->string('picture')->nullable(); 
            $table->integer('yearLevel')->nullable();
            $table->enum('employmentStatus', ['Employed', 'Unemployeed', 
                                              'Part-Time Job', 'Summer Job', 
                                              'On-the-Job Training'])->nullable(); 
            $table->enum('updateStatus', ['Updated', 'Outdated', 
                                          'Recent'])->nullable();
            $table->string('position')->nullable();

            $table->unsignedInteger('role_id')->nullable();
            $table->foreign('role_id')->references('id')->on('roles')
            ->onUpdate('cascade')->onDelete('cascade');
            
            $table->unsignedInteger('course_id')->nullable();
            $table->foreign('course_id')->references('id')->on('courses')
            ->onUpdate('cascade')->onDelete('cascade');
            
            $table->unsignedInteger('department_id')->nullable();
            $table->foreign('department_id')->references('id')->on('departments')
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
