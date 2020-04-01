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
            $table->string('name',200);
            $table->text('description');
            $table->string('origin',220)->nullable();
            $table->string('image',240);

            $table->bigInteger('shop_id')->unsigned();
            $table->foreign('shop_id')
                  ->references('id')
                  ->on('shops')
                  ->onDelete('cascade');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade');
            $table->float('price');
            $table->integer('quantity');
            $table->boolean('status')->default(false);
            $table->text('color');
            $table->text('size');
            $table->string('tags',240);
            $table->boolean('deleted')->default(false);
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
