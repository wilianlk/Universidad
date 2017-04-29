@extends('layouts.app')

@section('content')

<div class="row row-offcanvas row-offcanvas-right text-center">
    <div class="col-xs-12 col-sm-12">
          <div class="panel panel-primary">
            <div class="panel-heading">Agregar Nuevo Usuario</div>
              <div class="panel-body">
                <br>

              {!! Form::open(['route'=>'profesor.store','method'=>'POST'])!!}
              <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                    {!!form::label('nombre', 'Nombre')!!}
                    {!!Form::text('nombre', null,['id'=>'nombre', 'class'=>'form-control','placeholder'=>'Digite el Nombre']) !!}
                </div>
                <div class="form-group">
                    {!!form::label('apellido', 'Apellido')!!}
                    {!!Form::text('apellido', null,['id'=>'apellido', 'class'=>'form-control','placeholder'=>'Digite el Apellido']) !!}
                </div>
                <div class="form-group">
                    {!!form::label('codigo_profesor','Codigo del Profesor')!!}
                    {!!form::text('codigo_profesor',null,['id'=>'codigo_profesor', 'class'=>'form-control','placeholder'=>'Digite Codigo del Profesor'])!!}
                </div>
              </div><hr>
              <div class="col-md-8 col-md-offset-2">
               <a class="btn btn-primary" href="{{ route('profesor.index') }}">Atras</a>
               {!! Form::submit('Guardar Profesor',['class'=>'btn btn-success']) !!}
               {!! Form::close() !!}
              </div>
             
            </div>
        </div>
    </div>
</div>

@stop