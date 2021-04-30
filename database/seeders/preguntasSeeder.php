<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class preguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('preguntas')->insert([            
            'autor'=> 1,
            'categoria'=> 7,
            'titulo'=> 'Problema en vista Categoria',
            'descripcion'=> 'Hoy, al intentar hacer una categoria, no salían las opciones...',
            'estado'=> 1,
        ]);
        DB::table('preguntas')->insert([
            'autor'=> 2,
            'categoria'=> 1,
            'titulo'=> 'Productos novedosos impresos en 3D',
            'descripcion'=> 'La impresión 3D es una revolución industrial lenta pero constante y una de las tendencias de la tecnología actual. Es una revolución en cuanto a la hora de diseñar y fabricar productos y cada vez está aumentando el número de aplicaciones, más allá de un prototipo rápido. La incorporación del metal permite fabricar piezas de bajo volumen anual y con formas complejas para los sectores Automotriz y Aeroespacial que de otra forma serían muy caras. ',
            'estado'=> 1,
        ]);
        DB::table('preguntas')->insert([
            'autor'=> 1,
            'categoria'=> 1,
            'titulo'=> 'Vías del tren flotantes',
            'descripcion'=> 'Las vías de ferrocarril son una estructura compleja con fuertes requisitos geométricos (curvatura y pendiente) y son muy sensibles ante cualquier movimiento del terreno como vibraciones o terremotos. Este es el gran desafío que enfrentó el proyecto Sound Transit (actualmente en construcción), el cual pretende unir varias zonas de la ciudad de Seattle mediante puentes flotantes. En este puente «East Link», que se completará en 2022, las plataformas de acero y los rodamientos flexibles permitirán que las vías del tren ligero se mantengan rectas. Para el año 2023, 50,000 personas viajarán en trenes de 148,000 libras a toda velocidad a través del agua desde Seattle hasta Mercer Island, Washington.',
            'estado'=> 1,
        ]);
        DB::table('preguntas')->insert([
            'autor'=> 2,
            'categoria'=> 7,
            'titulo'=> 'Problema al iniciar Windows',
            'descripcion'=> 'Encendi mi pc hoy y me sale el siguiente error: una carita con un mensaje en ingles y la pantalla en azul ¿alguien sabe como resolverlo?',
            'estado'=> 1,
        ]);
    }
}
