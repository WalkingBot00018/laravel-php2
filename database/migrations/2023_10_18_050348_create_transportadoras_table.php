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
        Schema::create('transportadoras', function (Blueprint $table) {
            $table->id('id_transportador')->unsigned();
            $table->string('nombre',50);
            $table->string('direccion',50);
            $table->foreignId('id_ciudad');
            $table->string('telefono',20);
            $table->string('correo',50);
            $table->timestamps();
            $table->foreign('id_ciudad')->references('id_ciudad')->on('cidades')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transportadoras');
    }
};
