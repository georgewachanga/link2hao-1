<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveEmailPasswordFnameLnameFromOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('owners', function (Blueprint $table) {
            $table->dropColumn("fname");
            $table->dropColumn("lname");
            $table->dropColumn("email");
            $table->dropColumn("password");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('owners', function (Blueprint $table) {
            $table->string("fname");
            $table->string("lname");
            $table->string("email")->unique();
            $table->string("password");
        });
    }
}
