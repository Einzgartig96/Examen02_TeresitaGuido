@extends('wiki.layout')
@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <strong>¡Vaya!</strong> Parece que hubo un problema al insertar el usuario.<br><br>
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
                <h3 class="titulo_form">Nuevo Usuario</h3>
                <div class="dropdown-divider"></div>
            </div>
            <div class="col-lg-12 margin-tb" style="margin-top: 20px" >
                <form method="POST" action="{{route('usuario.store')}}" class='formulario_wiki'>        
                    @csrf
                    <div class="form-group" align="center" >
                        <div class="col-md-12 col-xl-12 col-sm-12" >
                            <label for="input_nombre" class='label_form'>Nombre completo: </label>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                        </div>
                        <div class="col-md-12 col-xl-12 col-sm-12" >
                            <label for="input_cedula" class='label_form'>Cedula: </label>
                            <input type="text" class="form-control" name="cedula" placeholder="Cedula">
                        </div>
                        <div class="col-md-12 col-xl-12 col-sm-12" >
                            <label for="input_usuario" class='label_form'>Usuario: </label>
                            <input type="text" class="form-control" name="usuario" placeholder="Usuario">
                        </div>
                        <div class="col-md-12 col-xl-12 col-sm-12" >
                            <label for="input_password" class='label_form'>Password: </label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="col-md-12 col-xl-12 col-sm-12" >
                            <label for="input_email" class='label_form'>Email: </label>
                            <input type="email" class="form-control" name="nombre" placeholder="Email">
                        </div>
                        <div class="col-md-12 col-xl-12 col-sm-12" >
                            <label for="input_rol" class='label_form'>Rol: </label>
                            <select name="roles" class="form-control">
                                @foreach($roles as $rows)
                                <option value="{{ $rows->id_rol }}">{{  $rows->descripcion }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12 col-xl-12 col-sm-12" >
                            <label for="input_telefono" class='label_form'>Telefono: </label>
                            <input type="text" class="form-control" name="nombre" placeholder="Telefono">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary boton-form" style="margin-top: 20px">Agregar usuario</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection