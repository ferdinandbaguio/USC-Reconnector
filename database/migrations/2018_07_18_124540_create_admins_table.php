<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('idnumber');
            $table->string('password');
            $table->enum('gender', ['Male', 'Female']);
            $table->text('description');
            $table->string('picture');
            $table->string('usertype');
            $table->enum('jobstatus', ['Employed', 'Unemployeed', 
                                       'Part-Time Job', 'Summer Job', 
                                       'On-the-Job Training']); 

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
        Schema::dropIfExists('admins');
    }
}
