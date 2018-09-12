<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_categories', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('message_id');
            $table->foreign('message_id')->references('id')->on('messages')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('filter_id');
            $table->foreign('filter_id')->references('id')->on('filters')
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
        Schema::dropIfExists('message__categories');
    }
}
