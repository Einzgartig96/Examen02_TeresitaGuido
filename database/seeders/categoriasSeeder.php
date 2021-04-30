<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class categoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre'=> 'Articulo',
        ]);       
        DB::table('categorias')->insert([
            'nombre'=> 'Soporte Tecnico',
        ]);
        DB::table('categorias')->insert([
            'nombre'=> 'Telemática',
        ]);
        DB::table('categorias')->insert([
            'nombre'=> 'Servicio al Cliente',
        ]);
        DB::table('categorias')->insert([
            'nombre'=> 'Software',
        ]);
        DB::table('categorias')->insert([
            'nombre'=> 'Hardware',
        ]);
        DB::table('categorias')->insert([
            'nombre'=> 'Reporte de problema',
        ]);
        DB::table('categorias')->insert([
            'nombre'=> 'Telefonía',
        ]);
    }
}
