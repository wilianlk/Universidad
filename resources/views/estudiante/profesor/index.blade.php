@extends('layouts.app')

@section('content')

  <div class="row row-offcanvas row-offcanvas-right text-center">
    <div class="col-xs-12 col-sm-12">
      <div class="panel panel-primary">
        <div class="panel-heading">Profesores</div>
        <div class="panel-body">
        <br>
          <br><br>
            <div class="page">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr>
                       <th>Nombres</th>
                       <th>Apellidos</th>
                       <th>Codigo de Profesor</th>
                       <th>Accion</th>
                    </tr>
                  </thead>    
                  <tbody>
                  @foreach($profesor as $profesors)
                    <tr>
                        <td>{{ $profesors->nombre }}</td> 
                        <td>{{ $profesors->apellido }}</td> 
                        <td>{{ $profesors->codigo_profesor }}</td>
                        <td>
                            <a href="{{ route('estudiante-listado_profesor', $profesors->id) }}" class="btn btn-warning">
                                Electivas
                            </a>
                        </td>    
                    </tr>     
                  @endforeach                 	
                  </tbody>
                </table>
              </div>
              {{ $profesor->render() }}
          </div>
          <a class="btn btn-primary" href="{{ URL('estudiante') }}">Atras</a>
        </div>
      </div>
    </div>
  </div>

@stop