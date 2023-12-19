<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEvaluers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('evaluers', function (Blueprint $table) {
            $table->unsignedBigInteger('idEtudiant');
            $table->unsignedBigInteger('idEC');
            $table->foreign('idEtudiant')->references('id')->on('utilisateurs')->onDelete('cascade');
            $table->foreign('idEC')->references('id')->on('e_c_s')->onDelete('cascade');
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
        Schema::table('evaluers', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['idEtudiant']);
            $table->dropForeign(['idEC']);
        });
    }
}
