<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunautesRuralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communautes_rurales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('regions_id');
            $table->foreign('regions_id')->references('id')->on('regions')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('departements_id');
            $table->foreign('departements_id')->references('id')->on('departements')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('arrondissements_id');
            $table->foreign('arrondissements_id')->references('id')->on('arrondissements')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nom_comm_rurale');
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
        Schema::dropIfExists('communautes_rurales');
    }
}
