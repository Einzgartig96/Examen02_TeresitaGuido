<?php
namespace App\Http\Controllers;

use App\Models\roles;
use App\Models\usuario;
use Illuminate\Http\Request;

class controladorUsuario extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $request = usuario::latest()->paginate();
        return view('wiki.usuarios',compact('request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = roles::latest()->paginate();
        return view('wiki.crearUsuario',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Valida que los espacios no esten vacios
        $request->validate([
            'nombre_completo' => 'required',
            'cedula' => 'required',
            'usuario' => 'required',
            'password' => 'required',
            'email' => 'required',
            'telefono' => 'required'
        ]);
        usuario::create($request->all());
        return redirect()->route('usuario.index')
                         ->with('Éxito', 'El usuario se agregó con éxito...');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(usuario $usuario)
    {
        $roles = roles::latest()->paginate();
         return view('wiki.mostrarUsuario',compact('usuario','roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(usuario $usuario)
            
    {   $roles = roles::latest()->paginate();
        return view('wiki.actualizarUsuario',compact('usuario','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuario $usuario)
    {
        $request->validate([
            'nombre_completo' => 'required',
            'cedula' => 'required',
            'usuario' => 'required',
            'password' => 'required',
            'email' => 'required',
            'telefono' => 'required'
        ]);
        $usuario->update($request->all());
        return redirect()->route('usuario.index')
                        ->with('exito','Usuario actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(usuario $usuario)
    {
        $usuario->delete();
        return redirect('usuario.index');
    }
}

