<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class controladorCategoria extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
        $request = Categoria::orderBy('id_categoria')->paginate();
        return view('wiki.categorias', compact('request'));
    }

    /**
     * Funcion para crear categorias 
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('wiki.crearCategoria');
    }

    /**
     * Almacena una categoria
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //Valida que los espacios no esten vacios
        
        $request->validate(['nombre' => 'required']);
        Categoria::create($request->all());
        return redirect()->route('categorias.index')
                        ->with('Éxito', 'La categoría se agregó con éxito...');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria) {
        
        return view('wiki.mostrarCategoria', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria) {
        
        return view('wiki.actualizarCategoria', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria) {
        
        $request->validate([
            'nombre' => 'required',
        ]);
        $categoria->update($request->all());
        return redirect()->route('categorias.index')
                        ->with('exito','Categoria actualizada con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria) {
        
        $categoria->delete();
        return redirect('categoria.index')
                        ->with('Éxito', 'La categoría se eliminó con éxito...');
    }

}
