<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->id('id_pregunta')->unsigned();
            $table->timestamps();
            $table->unsignedBigInteger('autor');
            $table->unsignedBigInteger('categoria');
            $table->string('titulo',200);
            $table->longText('descripcion');
            $table->boolean('estado')->default(1);               
            //Restricciones
            $table->foreign('categoria')->references('id_categoria')->on('categorias');
            $table->foreign('autor')->references('id_usuario')->on('usuarios');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preguntas');
    }
}
