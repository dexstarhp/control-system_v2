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
        schema::create ('sucursales', function(blueprint $table){
            $table->id();
            $table->string('razon_social');
            $table->string('tipo_documento');
            $table->string('numero_ducuemto');
            $table->string('direccion');
            $table->string('telefono');
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
        //
    }
};
