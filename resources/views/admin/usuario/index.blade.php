@extends('layouts.app')

@section('content')

  <div class="row row-offcanvas row-offcanvas-right text-center">
    <div class="col-xs-12 col-sm-12">
      <div class="panel panel-primary">
        <div class="panel-heading">Usuarios</div>
        <div class="panel-body">
        <br>
          <a href="{{ route('usuario.create') }}" class="btn btn-success">Agregar Usuario Nuevo</a><br><br>
            <div class="page">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr>
                       <th>Nombre</th>
                       <th>Apellido</th>
                       <th>Correo Electronico</th>
                       <th>Ocupacion</th>
                       <th>Accion</th>
                    </tr>
                  </thead>    
                  <tbody>
                  @foreach($usuario as $usuarios)
                    <tr>
                        <td>{{ $usuarios->nombre }}</td>
                        <td>{{ $usuarios->apellido }}</td>  
                        <td>{{ $usuarios->email }}</td>
                        <td>{{ $usuarios->rol }}</td>
                        <td>
                            <a href="{{ route('usuario.edit', $usuarios->id) }}" class="btn btn-warning">
                              Editar
                            </a>
                            {!! Form::open(['route'=>['usuario.destroy', $usuarios->id], 'method'=>'DELETE', 'class'=>' pull-right']) !!}
                            <button class="btn btn-danger">
                              Borrar
                            </button>
                            {!! Form::close() !!}
                        </td>    
                    </tr>     
                  @endforeach                 	
                  </tbody>
                </table>
              </div>
              {{ $usuario->render() }}
          </div>
          <a class="btn btn-primary" href="{{ URL('admin') }}">Atras</a>
        </div>
      </div>
    </div>
  </div>

@stop