<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo',240)->nullable();
            $table->string('nameService',200);
            $table->string('nameServiceOwner',200);
            $table->text('description')->nullable();
            $table->string('phone',20);
            $table->text('location')->nullable();
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
        Schema::dropIfExists('services');
    }
}
