<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('short_description');
            $table->text('description')->nullable();
            $table->bigInteger('price')->nullable();
            $table->integer('discount')->nullable();
            $table->string('image')->nullable();
            $table->string('file')->nullable();
            $table->string('bg_img')->nullable();
            $table->text('gallery')->nullable();
            $table->boolean('add_to_home')->default(0);
            $table->integer('position')->default(1);
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                    ->references('id')
                    ->on('categories');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users');
            $table->boolean('is_on_sale')->default(true);
            $table->text('data')->nullable();
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
        Schema::dropIfExists('products');
    }
}
