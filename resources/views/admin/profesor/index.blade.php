@extends('layouts.app')

@section('content')

  <div class="row row-offcanvas row-offcanvas-right text-center">
    <div class="col-xs-12 col-sm-12">
      <div class="panel panel-primary">
        <div class="panel-heading">Profesores</div>
        <div class="panel-body">
        <br>
          <a href="{{ route('profesor.create') }}" class="btn btn-success">Agregar Profesor Nuevo</a><br><br>
            <div class="page">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr>
                       <th>Nombre</th>
                       <th>Apellido</th>
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
                            <a href="{{ route('profesor.edit', $profesors->id) }}" class="btn btn-warning">
                              Editar
                            </a>
                            {!! Form::open(['route'=>['profesor.destroy', $profesors->id], 'method'=>'DELETE', 'class'=>'pull-right']) !!}
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
              {{ $profesor->render() }}
          </div>
          <a class="btn btn-primary" href="{{ URL('admin') }}">Atras</a>
        </div>
      </div>
    </div>
  </div>

@stop