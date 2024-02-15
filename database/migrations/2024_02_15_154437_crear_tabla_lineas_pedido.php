<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaLineasPedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineas_pedidos', function(BluePrint $tabla) {
            $tabla->integer('id');
            $tabla->integer('nLinea');
            $tabla->integer('idProducto');
            $tabla->integer('cantidad');
            $tabla->timestamps();
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
}
