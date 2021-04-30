@extends('wiki.layout')
@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <strong>¡Vaya!</strong> Parece que hubo un problema al insertar la pregunta.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container-fluid" align="center" style="margin-top: 50px" >
    <div class="card" style="width: 500px;" >
        <div class="card-body">
            <div class="col-lg-12 margin-tb" >
                <h3 class="titulo_form">Nueva Entrada</h3>
                <div class="dropdown-divider"></div>
            </div>
            <div class="col-lg-12 margin-tb" style="margin-top: 20px" >
                <form method="POST" action="{{route('preguntas.store')}}" class='formulario_wiki'>        
                    @csrf
                    <div class="form-group" align="center" >
                        <div class="col-md-12 col-xl-12 col-sm-12" >
                            <label for="input_autor" class='label_form'>Autor: </label>
                            <select name="autor" class="form-control">
                                @foreach($usuarios as $rows)
                                <option value="{{ $rows->id_usuario }}">{{  $rows->nombre_completo }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12 col-xl-12 col-sm-12" >
                            <label for="input_categoria" class='label_form'>Categoría: </label>
                            <select name="categorias" class="form-control">
                                @foreach($categoria as $rows)
                                <option value="{{ $rows->id_categoria }}">{{  $rows->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12 col-xl-12 col-sm-12" >
                            <label for="input_titulo" class='label_form'>Título: </label>
                            <input type="text" maxlength="200" class="form-control" name="titulo" placeholder="¿Tienes una pregunta o quieres compartir un descubrimiento?">
                        </div>
                        <div class="col-md-12 col-xl-12 col-sm-12" >
                            <label for="input_descripcion" class='label_form'>Descripcion: </label>
                            <textarea style="resize:none" rows="10" cols="50">Describe tu entrada/pregunta</textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary boton-form" style="margin-top: 20px">Agregar Entrada</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection