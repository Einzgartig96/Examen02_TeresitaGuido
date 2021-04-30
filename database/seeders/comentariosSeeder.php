<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class comentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comentarios')->insert([
            'autor'=> 2,
            'respuesta'=> 'Yo creo que ya esta reparado',
            'id_pregunta'=> 1,
        ]);
        DB::table('comentarios')->insert([
            'autor'=> 1,
            'respuesta'=> 'Excelente aporte, me encantan las impresoras 3D',
            'id_pregunta'=> 2,
        ]);
        DB::table('comentarios')->insert([
            'autor'=> 2,
            'respuesta'=> 'Increible, es algo que no se ve todos los dias',
            'id_pregunta'=> 3,
        ]);
        DB::table('comentarios')->insert([
            'autor'=> 1,
            'respuesta'=> 'Creo que deberias llevarla con un tecnico...',
            'id_pregunta'=> 4,
        ]);
    }
}
