<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class rolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'descripcion'=> 'Administrador'
        ]);
        DB::table('roles')->insert([
            'descripcion'=> 'Editor',
        ]);
        DB::table('roles')->insert([
            'descripcion'=> 'Usuario Autenticado'
        ]);
    }
}
