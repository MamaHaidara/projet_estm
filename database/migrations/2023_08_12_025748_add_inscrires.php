<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInscrires extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inscrires', function (Blueprint $table) {
            $table->unsignedBigInteger('idEtudiant');
            $table->unsignedBigInteger('idClasse');
            $table->foreign('idEtudiant')->references('id')->on('utilisateurs')->onDelete('cascade');
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
        Schema::table('inscrires', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['idEtudaint']);
            $table->dropForeign(['idClasse']);
        });
    }
}
