@extends('wiki.layout')
@section('content')

<div class="container-fluid" align="center" style="margin-top: 50px " id="menuWiki">
    <div class="card" >
        <div class="card-body">
            <h5 class="card-title">Menú de administración</h5>
            
            <h5 class="card-subtitle">¿Qué desea hacer?</h5>
            <div class="container" style="margin-top: 30px">
            <a href="{{route('categorias.index')}}" class="card-link">Administrar categorías</a>
            <div class="dropdown-divider"></div>
            <a href="{{route('preguntas.index')}}" class="card-link">Administrar entradas</a>
            <div class="dropdown-divider"></div>
            <a href="{{route('usuario.index')}}" class="card-link">Administrar usuarios</a>
            <div class="dropdown-divider"></div>
            <a href="{{route('comentarios.index')}}" class="card-link">Administrar comentarios</a>
            </div>
        </div>
    </div>
</div>
@endsection