@extends('layouts.app')

@section('content')

  <div class="row row-offcanvas row-offcanvas-right text-center">
    <div class="col-xs-12 col-sm-12">
      <div class="panel panel-primary">
        <div class="panel-heading">Electivas</div>
        <div class="panel-body">
        <br>
          <br><br>
            <div class="page">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr>
                       <th>Nombre</th>
                       <th>Profesor</th>
                       <th>Descripcion</th>
                       <th>Cupos Disponibles</th>
                       <th>Accion</th>
                    </tr>
                  </thead>    
                  <tbody>
                  @foreach($electiva as $electivas)
                    <tr>
                        <td>{{ $electivas->nombre }}</td>
                        <td>{{ $electivas->Profesor->nombre.' '.$electivas->Profesor->apellido }}</td>  
                        <td>{{ $electivas->descripcion }}</td>
                        <td>{{ $electivas->cupos_disponibles }}</td>
                        <td>
                            <a href="{{ route('estudiante/electivas', $electivas->id) }}" class="btn btn-success">
                                Inscribrse
                            </a>
                          
                        </td> 
                    </tr>     
                  @endforeach                 	
                  </tbody>
                </table>
              </div>
              {{ $electiva->render() }}
          </div>
          <a class="btn btn-primary" href="{{ URL('estudiante') }}">Atras</a>
        </div>
      </div>
    </div>
  </div>

@stop

