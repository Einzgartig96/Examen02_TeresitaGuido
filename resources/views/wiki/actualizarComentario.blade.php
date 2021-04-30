@extends('wiki.layout') 
@section('content')

<div class="main-container" align='center' style="margin-top: 50px">
    <div class="card" style="width: 60%;">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Editar Comentario</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('comentarios.index') }}"> Back</a>
                    </div>
                </div>
            </div>

            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Error!</strong> Hubo un problema al editar el comentario.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('comentarios.update',$comentario->id_comentario) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Autor:</strong>
                            @foreach($usuario as $rows)@if ($rows->id_usuario == $comentario->autor)
                            <select name="autor" class="form-control">
                            <option value="{{$rows->id_usuario}}"> {{$rows->nombre_completo}} </option>
                            </select>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Pregunta:</strong>
                            @foreach($pregunta as $row)@if ($row->id_pregunta == $comentario->id_pregunta)
                            <select name="id_pregunta" class="form-control">
                            <option value="{{$row->id_pregunta}}" selected> {{$row->titulo}} </option>
                            </select>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Contenido:</strong>
                            <input type="text" name="respuesta" value="{{ $comentario->respuesta }}" class="form-control">
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