<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_categories', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('post_id');
            $table->foreign('post_id')->references('id')->on('posts')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('filter_id');
            $table->foreign('filter_id')->references('id')->on('filters')
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
        Schema::dropIfExists('post__categories');
    }
}
