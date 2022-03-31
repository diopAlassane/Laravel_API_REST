<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunesArrondissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communes_arrondissements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('departements_id');
            $table->foreign('departements_id')->references('id')->on('departements')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('arrondissements_id');
            $table->foreign('arrondissements_id')->references('id')->on('arrondissements')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nom_commune_Arr');
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
        Schema::dropIfExists('communes_arrondissements');
    }
}
