<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddECS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('e_c_s', function (Blueprint $table) {
            $table->unsignedBigInteger('idUE');
            $table->foreign('idUE')->references('id')->on('u_e_s')->onDelete('cascade');
            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('e_c_s', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['idUE']);
        });
    }
}
