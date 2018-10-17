<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOccupationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occupations', function (Blueprint $table) {
            $table->increments('id');


            $table->string('title');
            $table->string('address');
            $table->float('salaryRangeOne', 9, 2);
            $table->float('salaryRangeTwo', 9, 2);
            $table->date('jobStart');
            $table->date('jobEnd')->nullable();

            $table->unsignedInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('alumni_id');
            $table->foreign('alumni_id')->references('id')->on('users')
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
        Schema::dropIfExists('occupations');
    }
}
