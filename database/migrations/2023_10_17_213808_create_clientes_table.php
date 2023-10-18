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
            $table->id('id_cliente')->unsigned();
            $table->string('codigo',50);
            $table->string('nombre',80);
            $table->string('email',50);
            $table->foreignId('id_ciudad');
            $table->string('telefono',20);
            $table->tinyInteger('activo');
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
        Schema::dropIfExists('clientes');
    }
};
