@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <br><br><br>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                
                <div class="panel-body text-center">
                    <h1>Bienvenido al sistema de Electivas </h1><br><br><br>
                        
                    @if(Auth::user()->rol == 'Admin')
                        <a href="{{ URL('admin') }}" class="btn btn-primary">
                            Acceder a la Plataforma
                        </a>
                    @elseif(Auth::user()->rol == 'Estudiante')
                        <a href="{{ URL('estudiante') }}" class="btn btn-primary">
                            Acceder a la Plataforma
                        </a>
                    @elseif(Auth::user()->rol == 'Usuario')
                        <a href="{{ URL('usuario') }}" class="btn btn-primary">
                            Acceder a la Plataforma
                        </a>
                    @endif
                </div><br><br><br>

            </div>
        </div>  
    </div>
</div>
@endsection
