<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class usuarioSeeder extends Seeder
{
    /**
     * Funcion para rellenar campos en la tabla de categorias, necesarios
     * para cuando comience a correr el programa.
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'nombre_completo'=> 'Teresita Guido',
            'cedula'=> '207510636',
            'usuario'=> 'Administrador',
            'password'=> md5('admin'),
            'email'=> 'admin@iqplus.com',
            'rol'=> '1',
            'telefono'=> "8888-8888",
        ]);
        DB::table('usuarios')->insert([
            'nombre_completo'=> 'Mario Brenes',
            'cedula'=> '305850615',
            'usuario'=> 'Editor',
            'password'=> md5('editor'),
            'email'=> 'editor@iqplus.com',
            'rol'=> '2',
            'telefono'=> "4444-4444",
        ]);
    }
}