@extends('wiki.layout')
@section('content')

<div class="main-container" align="center" style="margin-top: 50px">
    <div class="card" style="width: 30rem;" >
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2> Detalles de Comentario</h2>
                    </div>
                </div>
                
                <div class="col-lg-12 margin-tb">
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('comentarios.index') }}"> Atrás</a>
                    </div>
                </div>
            </div>   
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">                
                    <div class="form-group">
                        <strong>ID: </strong>
                        {{$comentario->id_comentario}}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <p><strong>Fecha: </strong>  {{$comentario->created_at}} </p>
                    </div>
                    <div class="form-group">
                        <strong>Autor: </strong>
                        @foreach($usuarios as $rows) @if($rows->id_usuario == $comentario->autor) {{ $rows->nombre_completo}} @endif  @endforeach
                    </div>                    
                    <div class="form-group">
                        <strong>Respuesta: </strong>
                        {{$comentario->respuesta}}
                    </div>
                    <div class="form-group">
                        <strong>Numero de Pregunta: </strong>
                        {{$comentario->id_pregunta}}

                </div>
            </div>
        </div>
    </div>
@endsection