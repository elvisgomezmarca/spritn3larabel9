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
        Schema::create('partidos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id_partido');
            $table->bigInteger('id_juez')->unsigned();
            $table->String('estado');
            $table->String('fecha');
            $table->String('hora');
            $table->String('equipo1');
            $table->String('equipo2');
            $table->timestamps();
            $table->foreign('id_juez')->references('id_juez')->on('jueces')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partidos');
    }
};
