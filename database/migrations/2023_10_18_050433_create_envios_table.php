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
        Schema::create('envios', function (Blueprint $table) {
            $table->id('id_envio')->unsigned();
            $table->string('numero_factura');
            $table->integer('id_cliente');
            $table->foreignId('id_transportador');
            $table->foreignId('ciudad_envio');
            $table->string('direccion_entrega',100);
            $table->tinyInteger('envio_unico');
            $table->timestamps();
            $table->foreign('numero_factura')->references('numero_factura')->on('facturas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_transportador')->references('id_transportador')->on('transportadoras')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ciudad_envio')->references('id_ciudad')->on('cidades')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('envios');
    }
};
