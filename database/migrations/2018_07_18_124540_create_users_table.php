<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('userStatus', ['Pending', 'Approved', 'Denied']);
            $table->enum('userType', ['Student', 'Teacher', 'Alumni', 
                                        'Admin', 'Coordinator', 'Chair']);
            $table->string('idnumber');
            $table->string('password');
            $table->enum('sex', ['Male', 'Female']);
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('lastname');
            $table->string('email')->nullable();
            $table->text('description')->nullable();
            $table->string('picture')->nullable(); 
            $table->integer('yearLevel')->nullable();
            $table->enum('employmentStatus', ['Full-Time Job', 'Unemployeed', 
                                              'Part-Time Job', 'Summer Job', 
                                              'On-the-Job Training']); 
            $table->enum('updateStatus', ['Updated', 'Outdated', 
                                          'Recent'])->nullable();
            $table->string('position')->nullable();
            
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
        Schema::dropIfExists('users');
    }
}
