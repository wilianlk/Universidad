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
                       <th>Apellidos</th>
                       <th>Correo Electronico</th>
                       <th>Ocupacion</th>
                    </tr>
                  </thead>    
                  <tbody>
                  @foreach($listados as $listados)
                    <tr>
                        <td>{{ $listados->Users->nombre }}</td>
                        <td>{{ $listados->Users->apellido }}</td>  
                        <td>{{ $listados->Users->email }}</td>
                        <td>{{ $listados->Users->rol }}</td> 
                    </tr>     
                  @endforeach                   
                  </tbody>
                </table>
              </div>
          </div>
          <a class="btn btn-primary" href="{{ URL('estudiante/listado_electivas') }}">Atras</a>
        </div>
      </div>
    </div>
  </div>

@stop