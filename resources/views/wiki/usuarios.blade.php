@extends('wiki.layout')
@section('content')

<!--@if ($message = Session::get('exito'))
        <div class="alert alert-success" style="min-width: 600px;">
            <button class="close" title="Cerrar" style="margin-top: 20px;" data-dismiss="alert"><span>&times;</span></button>
            <h4 class="display-4">{{ $message }}</h4>
        </div>
    @endif
@if ($message = Session::get('error'))
        <div class="alert alert-danger" style="min-width: 600px;">
            <button class="close" title="Cerrar" style="margin-top: 20px;" data-dismiss="alert"><span>&times;</span></button>
            <h4 class="display-4">{{ $message }}</h4>
        </div>
    @endif-->

<div class="main-container contenedor-menu">
    <div class="contenedor-categoria container-sm container-md container-lg">
        <div align="center">
            <h3 class="display-4">Lista de Usuarios</h3>
        </div>
        <div class="row" align="right">
            <div class="container col-md-6 col-sm-12 col-xl-6 col-6" align="right" >
                <a href="{{route('usuario.create')}}" id="nuevo" class="nueva_categoria btn btn-outline-primary" >+ Añadir</a> 
            </div>
        </div>       
        <div class="row usuario">
            <div class="lead col-sm-12 col-md-12 col-xl-6 col-12">
                <table class="table">
                    <tr>
                        <td>ID Usuario</td>
                        <td>Nombre</td>
                        <td>Cedula</td>
                        <td>Usuario</td>
                        <td>Password</td>
                        <td>Email</td>
                        <td>Rol</td>
                        <td>Telefono</td>
                        <td>Opciones</td>
                    </tr>
                    @foreach($request as $rows)
                    <tr>
                        <td>{{$rows->id_usuario}}</td>
                        <td>{{$rows->nombre_completo}}</td>
                        <td>{{$rows->cedula}}</td>
                        <td>{{$rows->usuario}}</td>
                        <td>{{$rows->password}}</td>
                        <td>{{$rows->email}}</td>
                        <td>{{$rows->rol}}</td>
                        <td>{{$rows->telefono}}</td>
                        <td>
                            <form action="{{ route('usuario.destroy',$rows->id_usuario) }}" method="POST">                   
                                <a href="{{ route('usuario.edit',$rows->id_usuario) }}" class="btn btn-primary boton-form" style="margin: 5px;">
                                    <img src="{{ asset('imagenes\edit.png')}}" width="20" height="20" alt="Editar"></a>
                                <a href="{{ route('usuario.show',$rows->id_usuario) }}" class="btn btn-info boton-form" style="margin: 5px;">
                                    <img src="{{ asset('imagenes\information.png')}}" width="20" height="20" alt="info"></a>  
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="margin: 5px;" class="btn btn-primary boton-form">Eliminar</button>
                            </form>
                        </td>    
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection