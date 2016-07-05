<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->integer('phone');
            $table->integer('idno');
            $table->string('location');
            $table->string('email')->unique();
            $table->string('password');
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
        Schema::drop('owners');
    }
}
