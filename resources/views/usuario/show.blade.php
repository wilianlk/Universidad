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
                    </tr>
                  </thead>    
                  <tbody>
                  @foreach($electiva as $electivas)
                    <tr>
                        <td>{{ $electivas->Electivas->nombre }}</td>
                        <td>{{ $electivas->Electivas->profesor }}</td>  
                        <td>{{ $electivas->Electivas->descripcion }}</td>
                        <td>{{ $electivas->Electivas->cupos_disponibles }}</td> 
                    </tr>     
                  @endforeach                   
                  </tbody>
                </table>
              </div>
          </div>
          <a class="btn btn-primary" href="{{ URL('usuario/estudiantes') }}">Atras</a>
        </div>
      </div>
    </div>
  </div>

@stop