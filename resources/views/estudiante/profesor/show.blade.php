@extends('layouts.app')

@section('content')

  <div class="row row-offcanvas row-offcanvas-right text-center">
    <div class="col-xs-12 col-sm-12">
      <div class="panel panel-primary">
        <div class="panel-heading">Estudiantes</div>
        <div class="panel-body">
        <br>
          <br><br>
            <div class="page">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr>
                       <th>Nombres</th>
                       <th>Profesor</th>
                       <th>Descripcion</th>
                       <th>Cupos Disponibles</th>
                    </tr>
                  </thead>    
                  <tbody>
                  @foreach($electivas as $electivas)
                    <tr>
                        <td>{{ $electivas->nombre }}</td>
                        <td>{{ $electivas->Profesor->nombre.' '.$electivas->Profesor->apellido }}</td>  
                        <td>{{ $electivas->descripcion }}</td>
                        <td>{{ $electivas->cupos_disponibles }}</td> 
                    </tr>     
                  @endforeach                   
                  </tbody>
                </table>
              </div>
          </div>
          <a class="btn btn-primary" href="{{ URL('estudiante/listado_profesor') }}">Atras</a>
        </div>
      </div>
    </div>
  </div>

@stop