<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_marcas_fabricantes', function (Blueprint $table) {
            $table->id('id_marca');
            $table->string('codigo');
            $table->string('nombre');
            $table->foreignId('pais_origen');
            $table->foreign('pais_origen')->references('id_pais')->on('paises');
            

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
        Schema::dropIfExists('_marcas_fabricantes');
    }
};
