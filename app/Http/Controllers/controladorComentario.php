<?php

namespace App\Http\Controllers;
use App\Models\Comentario;
use App\Models\usuario;
use App\Models\Pregunta;
use Illuminate\Http\Request;

class controladorComentario extends Controller
{
    /**
     * Muestra una lista de comentarios
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $request = Comentario::latest()->paginate(5);
        return view('wiki.comentarios',compact('request'));
    }

    /**
     * Funcion para mostrar la vista de crear comentario
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wiki.crearComentario');
    }

    /**
     * Almacena un comentario.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //Valida que los espacios no esten vacios
        $request->validate([
            'autor' => 'required',
            'respuesta' => 'required',
            'id_pregunta' => 'required'
        ]);
        Comentario::create($request->all());
        return redirect()->route('comentarios.index')
                         ->with('Éxito', 'El comentario se agregó con éxito...');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\comentarios  $comentarios
     * @return \Illuminate\Http\Response
     */
    public function show(Comentario $comentario)
    {
        $usuarios = usuario::latest()->paginate();
        $preguntas = Pregunta::latest()->paginate();
        return view('wiki.mostrarComentario',compact('comentario','usuarios','preguntas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\comentarios  $comentarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Comentario $comentario)
    {
        $usuario = usuario::latest()->paginate();
        $pregunta = Pregunta::latest()->paginate();
        return view('wiki.actualizarComentario',compact('comentario','usuario','pregunta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\comentarios  $comentarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comentario $comentario)
    {
        $request->validate([
            'autor' => 'required',
            'respuesta' => 'required',
            'id_pregunta' => 'required'
        ]);
        $comentario->update($request->all());
        return redirect()->route('comentarios.index')
                        ->with('exito','Categoria actualizada con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\comentarios  $comentarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comentario $comentario)
    {
        $comentario->delete();
        return redirect('comentarios.index')
                ->with('Éxito', 'El comentario se eliminó con éxito...');
    }
}
