<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Los Equipos
        Schema::create('equipments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->string('marca');
            $table->string('modelo');
            $table->string('n_serie');
            $table->date('fabricacion');
            $table->date('f_ingreso');
            $table->integer('vida_util');
            $table->string('equipo_asociado');
            $table->string('d_tecnico');
            $table->string('observaciones');
            $table->date('termino_garantia');
            $table->integer('estado');
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
        Schema::dropIfExists('equipments');
    }
}
