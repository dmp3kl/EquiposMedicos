<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Formulario de las personas a la Gaijin
        Schema::create('forms', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_ingreso');
            $table->date('fecha_termino');
            $table->string('nomresponsable');
            $table->integer('services_id');
            $table->longText('descripcion');
            $table->integer('importancia');
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
        Schema::dropIfExists('forms');
    }
}
