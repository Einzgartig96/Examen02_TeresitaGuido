@extends('wiki.layout')
@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <strong>¡Vaya!</strong> Parece que hubo un problema al insertar la categoría.<br><br>
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
                <h3 class="titulo_form">Nueva Categoría</h3>
                <div class="dropdown-divider"></div>
            </div>
            <div class="col-lg-12 margin-tb" style="margin-top: 20px" >
                <form method="POST" action="{{route('categorias.store')}}" class='formulario_wiki'>        
                    @csrf
                    <div class="form-group" align="center" >
                        <label for="input_nombre" class='label_form'>Nombre de la categoría: </label>
                        <input type="text" name="nombre" placeholder="Categoria">
                    </div>
                    <button type="submit" class="btn btn-primary boton-form">Agregar categoria</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection