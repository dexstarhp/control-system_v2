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
        schema::create ('detalles_ingresos', function(blueprint $table){
            $table->id();
            $table->string('codigo');
            $table->string('stock_ingreso');
            $table->string('Stock_actual');
            $table->text('descripcion');
            $table->string('precio_compra');
            $table->string('precio_distribuidor');
            $table->string('precio_publico');
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
        Schema::dropIfExists('detalles_ingresos');
    }
};
