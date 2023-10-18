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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id('codigo_factura')->unsigned();
            $table->string('numero_factura',50)->unique();
            $table->string('id_vendedores')->unique();
            $table->foreignId('id_cliente');
            $table->timestamp('fecha_emision');
            $table->tinyInteger('estado');
            $table->enum('forma_pago',['CONTADO','CREDITO']);
            $table->timestamps();
            // $table->foreign('id_vendedores')->references('id_vendedores')->on('vendedores');
            // $table->foreign('id_vendedor')->references('id_vendedor')->on('vendedores')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('id_cliente')->references('id_cliente')->on('clientes')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
};
