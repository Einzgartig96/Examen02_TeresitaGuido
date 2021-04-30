@extends('wiki.layout')
@section('content')

<div class="main-container" align="center" style="margin-top: 50px">
    <div class="card" style="width: 18rem;" >
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2> Detalles de Categoria</h2>
                    </div>
                    <div class="pull-right" style="margin-right: 20px">
                        <a class="btn btn-primary" href="{{ route('categorias.index') }}"> Atrás</a>
                    </div>
                </div>
            </div>   
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">                
                    <div class="form-group">
                        <strong>ID: </strong>
                        {{$categoria->id_categoria}}
                       
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <strong>Nombre: </strong>  
                      {{$categoria->nombre}}
                    </div>                    
                </div>
            </div>
        </div>
    </div>
@endsection