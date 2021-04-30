<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id('id_comentario')->unsigned();
            $table->timestamps();
            $table->unsignedBigInteger('autor');
            $table->text('respuesta');
            $table->unsignedBigInteger('id_pregunta');
            
            //Requisitos
            $table->foreign('autor')->references('id_usuario')->on('usuarios');
            $table->foreign('id_pregunta')->references('id_pregunta')->on('preguntas');
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
        Schema::dropIfExists('comentarios');
    }
}
