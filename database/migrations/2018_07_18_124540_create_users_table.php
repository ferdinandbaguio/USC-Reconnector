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
            $table->string('idnumber')->unique();
            $table->string('password')->nullable();
            $table->enum('sex', ['Male', 'Female'])->nullable();;
            $table->string('firstName')->nullable();
            $table->string('middleName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('contactNo')->nullable();
            $table->string('address')->nullable();
            $table->string('birthdate')->nullable();
            $table->string('email')->nullable()->unique();
            $table->text('description')->nullable();
            $table->string('picture')->nullable();
            $table->integer('yearLevel')->nullable();
            $table->enum('civilStatus', ['Single', 'Married', 'Separated','Single Parent', 'Widow or Widower'])->nullable();
            $table->enum('userStatus', ['Pending', 'Approved', 'Denied'])->nullable();
            $table->enum('userType', ['Student', 'Teacher', 'Alumnus', 
                                        'Admin', 'Coordinator', 'Chair'])->nullable();
            $table->enum('employmentStatus', ['Employed', 'Unemployed(Now)', 
                                                            'Unemployed(Never)'])->nullable();
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
