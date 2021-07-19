<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Suppliers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('client_id')->unsigned()->nullable();
            $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('company')->nullable();
            $table->string('contact')->nullable();
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('site')->nullable();
            $table->text('observation')->nullable();
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
        Schema::dropIfExists('suppliers');
    }
}
