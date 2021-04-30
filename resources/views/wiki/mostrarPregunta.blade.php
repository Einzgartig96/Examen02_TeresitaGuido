@extends('wiki.layout')
@section('content')

<div class="main-container" align="center" style="margin-top: 50px">
    <div class="card" style="width: 30rem;" >
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2> Detalles de la Entrada</h2>
                    </div>
                </div>
                
                <div class="col-lg-12 margin-tb">
                    <div class="pull-right" style="margin-right: 20px">
                        <a class="btn btn-primary" href="{{ route('preguntas.index') }}"> Atrás</a>
                    </div>
                </div>
            </div>   
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">                
                    <div class="form-group">
                        <strong>ID: </strong>
                        {{$pregunta->id_pregunta}}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <p><strong>Fecha: </strong>  {{$pregunta->created_at}} </p>
                    </div>
                    <div class="form-group">
                        <strong>Autor: </strong>
                        @foreach($usuarios as $rows) @if($rows->id_usuario == $pregunta->autor) {{ $rows->nombre_completo}} @endif  @endforeach
                    </div>                    
                    <div class="form-group">
                        <strong>Categoria: </strong>
                        @foreach($categorias as $rows) @if($rows->id_categoria == $pregunta->categoria) {{ $rows->nombre}} @endif  @endforeach
                    </div>
                    <div class="form-group">
                        <strong>Titulo: </strong>
                        {{$pregunta->titulo}}
                    </div>
                    <div class="form-group">
                        <strong>Descripcion: </strong>
                        {{$pregunta->descripcion}}
                    </div>
                    <div class="form-group">
                        <strong>Estado: </strong>
                        @if ($pregunta->estado == 1){{'Abierta'}} @else {{'Cerrada'}} @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection