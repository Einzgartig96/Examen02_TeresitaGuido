@extends('wiki.layout')
@section('content')

<div class="main-container" align="center" style="margin-top: 50px">
    <div class="card" style="width: 18rem;" >
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2> Detalles de Usuario</h2>
                    </div>
                    <div class="pull-right" style="margin-right: 20px">
                        <a class="btn btn-primary" href="{{ route('usuario.index') }}"> Atrás</a>
                    </div>
                </div>
            </div>   
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">                
                    <div class="form-group">
                        <strong>ID: </strong>
                        {{$usuario->id_usuario}}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <strong>Nombre: </strong>  
                      {{$usuario->nombre_completo}}
                    </div>
                    <div class="form-group">
                        <strong>Cedula: </strong>
                        {{$usuario->cedula}}
                    </div>                    
                    <div class="form-group">
                        <strong>Password: </strong>
                        {{$usuario->password}}
                    </div>
                    <div class="form-group">
                        <strong>Email: </strong>
                        {{$usuario->email}}
                    </div>
                    <div class="form-group">
                        <strong>Rol: </strong>
                        @foreach($roles as $rows) 
                        @if($usuario->rol == $rows->id_rol) {{ $rows->descripcion}} @endif  
                        @endforeach
                    </div>
                    <div class="form-group">
                        <strong>Telefono: </strong>
                        {{$usuario->telefono}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection