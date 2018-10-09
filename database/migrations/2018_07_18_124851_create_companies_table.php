<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('address');
            $table->text('description');
            $table->string('picture');
            $table->tinyinteger('linkage');

            $table->unsignedInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('area_id');
            $table->foreign('area_id')->references('id')->on('areas')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('industry_id');
            $table->foreign('industry_id')->references('id')->on('industries')
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
        Schema::dropIfExists('companies');
    }
}
