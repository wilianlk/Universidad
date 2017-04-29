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
                <i class="fa fa-graduation-cap fa-5x"></i>
                <a href="{{ URL('admin/usuario') }}" class="btn btn-primary btn-block btn-home-admin">ESTUDIANTES</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel">
                <i class="fa fa-list-alt fa-5x"></i>
                <a href="{{ URL('admin/electiva') }}" class="btn btn-primary btn-block btn-home-admin">ELECTIVAS</a>
            </div>
        </div>
        
        
    </div><hr>
</div>

@stop    