<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id_usuario')->unsigned();
            $table->timestamps();
            $table->string('nombre_completo');
            $table->string('cedula');
            $table->string('usuario');
            $table->string('password');
            $table->string('email');
            $table->unsignedBigInteger('rol');
            $table->string('telefono');
            
            //Restricciones
            $table->foreign('rol')->references('id_rol')->on('roles');
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
        Schema::dropIfExists('usuarios');
    }
}
