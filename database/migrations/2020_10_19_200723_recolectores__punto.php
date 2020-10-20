<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecolectoresPunto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recolectorespunto', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idRecolector');
            $table->unsignedBigInteger('idPunto');
            $table->foreign('idRecolector')->references('id')->on('recolector');
            $table->foreign('idPunto')->references('id')->on('puntorecoleccion');

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
        Schema::dropIfExists('recolectorespunto');
    }
}
