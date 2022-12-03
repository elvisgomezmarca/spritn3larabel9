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
        Schema::create('personas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id_persona');
            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('id_equipo')->unsigned();
            $table->string('ci');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('rol');
            $table->string('sexo');
            $table->string('nacionalidad');
            $table->string('fechaNac');
            $table->string('foto');
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_equipo')->references('id_equipo')->on('equipos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
};
