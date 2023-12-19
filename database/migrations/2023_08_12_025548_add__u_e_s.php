<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUES extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('u_e_s', function (Blueprint $table) {
            $table->unsignedBigInteger('idClasse');
            $table->foreign('idClasse')->references('id')->on('classes')->onDelete('cascade');
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
        Schema::table('u_e_s', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['idClasse']);
        });
    }
}
