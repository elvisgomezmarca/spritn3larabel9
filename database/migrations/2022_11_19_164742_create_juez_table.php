<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuezTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jueces', function (Blueprint $table) {
            $table->bigIncrements('id_juez');
            $table->string('ci');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('sexo');
            $table->string('nacionalidad');
            $table->string('fechaNac');
            $table->string('foto');
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
        Schema::dropIfExists('jueces');
    }
}
