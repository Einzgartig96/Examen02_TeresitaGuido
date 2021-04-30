@extends('wiki.layout') 
@section('content')

<div class="main-container" align='center' style="margin-top: 50px">
    <div class="card" style="width: 60%;">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Editar Pregunta</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('preguntas.index') }}"> Back</a>
                    </div>
                </div>
            </div>

            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Error!</strong> Hubo un problema al editar la pregunta.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('preguntas.update',$pregunta->id_pregunta) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Autor:</strong>
                            @foreach($usuarios as $rows)@if ($rows->id_usuario == $pregunta->autor)
                            <input type="text" name="titulo" value=" {{ $rows->nombre_completo }}" class="form-control" readonly> 
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            <select name="roles" class="form-control">
                            @foreach($categoria as $rows) <option value="{{ $rows->id_categoria }}"> {{  $rows->nombre }}</option> @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Título:</strong>
                            <input type="text" name="titulo" value="{{ $pregunta->titulo }}" class="form-control">
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Contenido:</strong>
                            <input type="text" name="descripcion" value="{{ $pregunta->descripcion }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Estado:</strong>
                            <select name="roles" class="form-control">
                            <option value="1" selected="selected"> Abierta</option> 
                            <option value="2"> Cerrada</option> 
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection