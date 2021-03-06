@extends('layouts.app')

@section('content')

    <div class="col-md-12">
        <div class="panel panel-primary">
                
            <div class="panel-body text-center">
                <h1>Sistema de Electivas </h1><br>
                <h3>Bienvenido(a) <strong>{{ Auth::user()->nombre.' '.Auth::user()->apellido }}</strong> al <i class="fa fa-cog" aria-hidden="true"></i>
                Panel de Control.</h3><hr>
            </div>

        </div>
    </div>
    
    
    <div class="row text-center">

        <div class="col-md-4">
            <div class="panel">
                <i class="fa fa-list-alt fa-5x"></i>
                <a href="{{ URL('estudiante/electivas') }}" class="btn btn-primary btn-block btn-home-admin">ELECTIVAS</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel">
                <i class="fa fa-list-alt fa-5x"></i>
                <a href="{{ URL('estudiante/listado_profesor') }}" class="btn btn-primary btn-block btn-home-admin">LISTADO PROFESOR</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel">
                <i class="fa fa-list-alt fa-5x"></i>
                <a href="{{ URL('estudiante/listado_electivas') }}" class="btn btn-primary btn-block btn-home-admin">LISTADO ESTUDIANTES</a>
            </div>
        </div>
        
        
    </div><hr>
</div>

@stop    