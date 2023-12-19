<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEnseigners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enseigners', function (Blueprint $table) {
            $table->unsignedBigInteger('idEC');
            $table->unsignedBigInteger('idEnseignant');
            $table->foreign('idEC')->references('id')->on('e_c_s')->onDelete('cascade');
            $table->foreign('idEnseignant')->references('id')->on('utilisateurs')->onDelete('cascade');
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
        Schema::table('enseigners', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['idEC']);
            $table->dropForeign(['idEnseignant']);
        });
    }
}
