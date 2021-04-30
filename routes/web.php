<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui se registran las rutas para la aplicacion. Estas rutas son cargadas por  
| el RSP con un grupo que contiene el grupo del middleware de la web.
|
*/

Route::get('/', function () {
    return view('wiki.layout');
});
//Ruta para acceder al menú administrativo. (Disponible sólo para usuario Administrador)
Route::get('/menu', function () {
    return view('wiki.administrarWiki');
});
//Ruta para acceder al index o bienvenida
Route::get('/inicio', function () {
    return view('wiki.index');
});

Route::resource('usuario',App\Http\Controllers\controladorUsuario::class);
Route::resource('preguntas',App\Http\Controllers\controladorPregunta::class);
Route::resource('categorias',App\Http\Controllers\controladorCategoria::class);
Route::resource('comentarios',App\Http\Controllers\controladorComentario::class);
Route::resource('roles',App\Http\Controllers\controladorRoles::class);

