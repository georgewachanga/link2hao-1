<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLocationIdCategoryIdToPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->integer('category_id');
            $table->integer('location_id');
            $table->dropColumn('location');
            $table->dropColumn('category');
            $table->dropColumn('owneremail');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn('category_id');
            $table->dropColumn('location_id');
            $table->string('location');
            $table->string('category');
        });
    }
}
