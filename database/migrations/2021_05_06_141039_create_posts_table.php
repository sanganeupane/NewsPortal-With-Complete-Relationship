<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('image')->nullable();
            $table->boolean('status')->default(0);

            $table->unsignedBigInteger('cat_id')->unsigned();
            $table->foreign('cat_id')->references('id')
                ->on('categories')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('sub_cat_id')->unsigned();
            $table->foreign('sub_cat_id')->references('id')
                ->on('sub_categories')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('posted_by')->unsigned();
            $table->foreign('posted_by')->references('id')
                ->on('admin_users')
                ->onDelete('restrict');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
