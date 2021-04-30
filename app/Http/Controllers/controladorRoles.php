<?php

namespace App\Http\Controllers;

use App\Models\roles;
use Illuminate\Http\Request;

class controladorRoles extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $request = roles::latest()->paginate();
        return view('wiki.roles',compact('request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wiki.crearRol');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([ 'descripcion' => 'required']);
        roles::create($request->all());
        return redirect()->route('roles.index') 
                         ->with('Éxito', 'El rol se agregó con éxito...');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function show(roles $roles)
    {
        $usuarios = usuario::find($id_usuario);
         return view('wiki.mostrarRoles',compact('roles','usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function edit(roles $roles)
    {
        return view('wiki.actualizarRoles',compact('roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, roles $roles)
    {
        $request->validate([
            'descripcion' => 'required',
        ]);
        $roles->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function destroy(roles $roles)
    {
        $roles->delete();
        return redirect()->route('roles.index')
                ->with('Éxito', 'La categoría se eliminó con éxito...');   
    }
}
