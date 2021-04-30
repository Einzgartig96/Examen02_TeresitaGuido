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
            <h3 class="display-4">Comentarios de la wiki</h3>
        </div>
        <div class="row" align="right">
            <div class="container col-md-6 col-sm-12 col-xl-6 col-6" align="right" >
                <a href="{{route('comentarios.create')}}" id="nuevo" class="nueva_pregunta btn btn-outline-primary" >+ Añadir</a> 
            </div>
        </div>       
        <div class="row preguntas">
            <div class="lead col-sm-12 col-md-12 col-xl-6 col-12">
                <table class="table">
                    <tr>
                        <td>ID</td>
                        <td>Fecha</td>
                        <td>Autor</td>
                        <td>Respuesta</td>
                        <td>ID Pregunta</td>
                        <td>Opciones</td>
                    </tr>
                    @foreach($request as $rows)
                    <tr>
                        <td>{{$rows->id_comentario}}</td>
                        <td>{{$rows->created_at}}</td>
                        <td>{{$rows->autor}}</td>
                        <td>{{$rows->respuesta}}</td>
                        <td>{{$rows->id_pregunta}}</td>
                        <td>
                            <form action="{{ route('comentarios.destroy',$rows->id_comentario) }}" method="POST">                   
                                <a href="{{ route('comentarios.edit',$rows->id_comentario) }}" class="btn btn-primary boton-form" style="margin: 5px;">
                                    <img src="{{ asset('imagenes\edit.png')}}" width="20" height="20" alt="Editar"></a>
                                <a href="{{ route('comentarios.show',$rows->id_comentario) }}" class="btn btn-info boton-form" style="margin: 5px;">
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