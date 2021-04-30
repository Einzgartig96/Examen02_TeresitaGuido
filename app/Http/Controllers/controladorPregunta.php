<?php
namespace App\Http\Controllers;

use App\Models\Pregunta;
use App\Models\Categoria;
use App\Models\usuario;
use Illuminate\Http\Request;

class controladorPregunta extends Controller
{
    /**
     * Muestra una lista de preguntas
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $request = Pregunta::latest()->paginate();
        return view('wiki.preguntas',compact('request'));
    }

    /**
     * Muestra la vista para crear pregunta.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = Categoria::get();
        $usuarios = usuario::get();
        if(empty($categoria)){      
            return redirect()->route("pregunta.index")
             ->with("Error",'No existen categorias para las preguntas');
        }else{
            return view('wiki.crearPregunta',compact('categoria','usuarios'));
        }
    }

    /**
     * Guardar un registro de pregunta.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //Valida que los espacios no esten vacios
        $request->validate([
            'autor'=> 'required',
            'categoria'=> 'required',
            'titulo'=> 'required',
            'descripcion'=> 'required',
            'estado'=> 1,
        ]);
        Pregunta::create($request->all());
        return redirect()->route('pregunta.index')
                ->with('Éxito', 'La entrada se agregó con éxito...');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\preguntas  $preguntas
     * @return \Illuminate\Http\Response
     */
    public function show(Pregunta $pregunta) 
    {
        $categorias = Categoria::latest()->paginate();
        $usuarios = usuario::latest()->paginate();
        return view('wiki.mostrarPregunta', compact('pregunta','categorias','usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\preguntas  $preguntas
     * @return \Illuminate\Http\Response
     */
    public function edit(Pregunta $pregunta)
    {   
        $categoria = Categoria::latest()->paginate();
        $usuarios = usuario::latest()->paginate();
        return view('wiki.actualizarPregunta',compact('pregunta','categoria','usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\preguntas  $preguntas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pregunta $pregunta) {
        $request->validate([
            'autor'=> 'required',
            'categoria'=> 'required',
            'titulo'=> 'required',
            'descripcion'=> 'required',
            'estado'=>'required',
        ]);
        $pregunta->update($request->all());
        return redirect()->route('pregunta.index')
                        ->with('exito','Pregunta actualizada con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\preguntas  $preguntas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pregunta $pregunta)
    {
       $pregunta->delete();
        return redirect()->route('pregunta.index')
                ->with('Éxito', 'La entrada se eliminó con éxito...');    
    }
}
