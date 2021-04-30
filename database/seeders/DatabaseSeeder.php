<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     * @return void
     */
    public function run() {
        $this->call([
            categoriasSeeder::class,
            rolSeeder::class,
            usuarioSeeder::class,
            preguntasSeeder::class,
            comentariosSeeder::class,
        ]);
    }

}
