<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receivers', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('message_id');
            $table->foreign('message_id')->references('id')->on('messages')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('recipient_id');
            $table->foreign('recipient_id')->references('id')->on('carolinians')
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
        Schema::dropIfExists('receivers');
    }
}
