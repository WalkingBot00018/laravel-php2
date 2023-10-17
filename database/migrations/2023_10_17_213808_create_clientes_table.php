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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('id_cliente');
            $table->string('codigo');
            $table->string('nombre');
            $table->string('correo');
            $table->foreignId('id_ciudad')->unsigned();
            $table->string('telefono');
            $table->foreign('id_ciudad')->references('id_ciudad')->on('cidades');

            
            $table->tinyInteger('activo');



            
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
        Schema::dropIfExists('clientes');
    }
};
