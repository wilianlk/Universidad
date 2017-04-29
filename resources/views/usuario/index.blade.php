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
                       <th>Tipo</th>
                       <th>Accion</th>
                    </tr>
                  </thead>    
                  <tbody>
                  @foreach($usuario as $usuarios)
                  @if($usuarios->rol == "estudiante")
                    <tr>
                        <td>{{ $usuarios->nombre }}</td>
                        <td>{{ $usuarios->apellido }}</td>  
                        <td>{{ $usuarios->email }}</td>
                        <td>{{ $usuarios->rol }}</td>
                        <td>
                            <a href="{{ route('estudiantes.show', $usuarios->id) }}" class="btn btn-warning">
                                Mostrar
                            </a>
                        </td>    
                    </tr> 
                  @endif      
                  @endforeach                 	
                  </tbody>
                </table>
              </div>
              {{ $usuario->render() }}
          </div>
          <a class="btn btn-primary" href="{{ URL('usuario') }}">Atras</a>
        </div>
      </div>
    </div>
  </div>

@stop