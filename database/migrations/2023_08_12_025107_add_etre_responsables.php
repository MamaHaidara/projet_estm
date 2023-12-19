<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEtreResponsables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('etre_responsables', function (Blueprint $table) {
            $table->unsignedBigInteger('idFormation');
            $table->unsignedBigInteger('idEnseignant');
            $table->foreign('idFormation')->references('id')->on('formations')->onDelete('cascade');
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
        Schema::table('etre_responsables', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['idFormation']);
            $table->dropForeign(['idEnseignant']);

        });
    }
}
