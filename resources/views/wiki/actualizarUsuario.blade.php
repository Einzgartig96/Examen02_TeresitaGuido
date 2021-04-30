@extends('wiki.layout')
@section('content')
<div class="card">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Información de Usuario</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('usuario.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error!</strong> Hubo un problema al actualizar el usuario.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('usuario.update',$usuario->id_usuario) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="input_nombre" class='label_form'>Nombre completo: </label>
                <input type="text" class="form-control" value="{{$usuario->nombre_completo}}" name= "nombre_completo">
            </div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="input_cedula" class='label_form'>Cedula: </label>
                <input type="text" class="form-control" value="{{$usuario->cedula}}" name="cedula" readonly>
            </div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="input_usuario" class='label_form'>Usuario: </label>
                <input type="text" class="form-control" value="{{$usuario->usuario}}" name="usuario" readonly>
            </div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="input_password" class='label_form'>Password: </label>
                <input type="password" class="form-control" value="{{$usuario->password}}" name="password" >
            </div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="input_email" class='label_form'>Email: </label>
                <input type="email" class="form-control" value="{{$usuario->email}}" name="email" >
            </div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="input_rol" class='label_form'>Rol: </label>
                <select name="roles" class="form-control">
                    @foreach($roles as $rows)option value="{{ $rows->id_rol }}">{{  $rows->descripcion }}</option> @endforeach
                </select>
            </div>
            <div class="col-md-12 col-xl-12 col-sm-12" >
                <label for="input_telefono" class='label_form'>Telefono: </label>
                <input type="text" class="form-control"  value="{{$usuario->telefono}}" name="telefono">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>       
        </div>
    </form>
</div>
@endsection