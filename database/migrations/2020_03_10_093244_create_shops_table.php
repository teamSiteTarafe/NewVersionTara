<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logo',240)->nullable();
            $table->string('nameShop',200);
            $table->string('nameShopOwner',200);
            $table->text('description')->nullable();;
            $table->string('phone',20);
            $table->text('location')->nullable();;
            $table->string('email',200);
            $table->string('password',200);
            $table->boolean('desactive')->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('shops');
    }
}
