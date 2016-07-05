<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('category');
            $table->string('location');
            $table->string('owneremail');
            $table->integer('price');
            $table->text('description');
            $table->string('images');
            $table->timestamps();

            //$table->foreign('ownerEmail')->references('email')->on('owners');
           // $table->foreign('location')->references('locationName')->on('locations');
           // $table->foreign('category')->references('categoryName')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('properties');
    }
}
