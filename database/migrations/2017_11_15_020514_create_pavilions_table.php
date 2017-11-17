<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePavilionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Los pavellones a los que son asignados los Equipos
        Schema::create('pavilions', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('fh_inicio');
            $table->datetime('fh_termino');
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
        Schema::dropIfExists('pavilions');
    }
}
