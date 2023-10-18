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
        Schema::create('cliente_facturas', function (Blueprint $table) {
            $table->integer('id_cliente')->unsigned();
            $table->string('nombre',80);
            $table->string('numero_factura',50);
            $table->timestamp('fecha_emision');
            $table->tinyInteger('estado');
            $table->string('codigo_producto',50);
            $table->integer('cantidad');
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
        Schema::dropIfExists('cliente_facturas');
    }
};
