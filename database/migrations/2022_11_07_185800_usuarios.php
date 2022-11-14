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
        schema::create ('usuarios', function(blueprint $table){
            $table->id();
            $table->string('tipo_usuario');
            $table->string('Fecha_registro');
            $table->string('almacen');
            $table->string('compras');
            $table->string('ventas');
            $table->string('consulta_comopras');
            $table->string('consulta_ventas');
            $table->string('administrador');
            $table->string('estado');
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
        Schema::dropIfExists('usuarios');
    }
};
