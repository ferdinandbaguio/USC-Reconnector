<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');


            $table->string('name');
            $table->string('address');
            $table->string('jobStart');
            $table->string('jobEnd');

            $table->unsignedInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('carolinian_id');
            $table->foreign('carolinian_id')->references('id')->on('carolinians')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('jobs');
    }
}
