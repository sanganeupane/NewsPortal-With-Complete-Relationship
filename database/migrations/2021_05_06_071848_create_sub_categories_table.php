<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->string('sub_cat_name')->unique();
            $table->string('slug')->unique();
            $table->longText('description')->nullable();
            $table->boolean('status')->default(0);

            $table->unsignedBigInteger('cat_id')->unsigned();
            $table->foreign('cat_id')->references('id')
                ->on('categories')
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
        Schema::dropIfExists('sub_categories');
    }
}
