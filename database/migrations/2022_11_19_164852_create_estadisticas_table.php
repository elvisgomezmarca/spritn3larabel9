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
        Schema::create('estadisticas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('id_partido')->unsigned();
            $table->bigInteger('id_persona')->unsigned();
            $table->string('titulo');
            $table->integer('cantidad');
            $table->string('numero');
            $table->timestamps();
            $table->foreign('id_partido')->references('id_partido')->on('partidos')->onDelete('cascade');
            $table->foreign('id_persona')->references('id_persona')->on('personas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estadisticas');
    }
};
