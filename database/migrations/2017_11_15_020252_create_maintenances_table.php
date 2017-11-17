<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaintenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Mantenciones de los Equipos
        Schema::create('maintenances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('orden_compra');
            $table->string('guia_despacho');
            $table->date('inicio_mantencion');
            $table->date('fin_mantencion');
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
        Schema::dropIfExists('maintenances');
    }
}
