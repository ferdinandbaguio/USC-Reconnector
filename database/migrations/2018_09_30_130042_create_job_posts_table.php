<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('companyName');
            $table->string('address');
            $table->string('jobTitle');
            $table->string('description');
            $table->string('salaryRange');
            $table->string('contactNo');
            $table->string('email');
            $table->string('image')->nullable();
            $table->enum('jobStatus', ['Pending', 'Approved', 'Denied']);
            
              
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('job_posts');
    }
}
