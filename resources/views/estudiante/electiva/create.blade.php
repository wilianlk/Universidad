@extends('layouts.app')

@section('content')

<div class="row row-offcanvas row-offcanvas-right text-center">
    <div class="col-xs-12 col-sm-12">
          <div class="panel panel-primary">
            <div class="panel-heading">Agregar Nueva Materia</div>
              <div class="panel-body">
                <br>

              {!! Form::open(['route'=>'electiva.store','method'=>'POST'])!!}
              <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                    {!!form::label('nombre', 'Nombre')!!}
                    {!!Form::text('nombre', null,['id'=>'nombre', 'class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!!form::label('profesor', 'Profesor')!!}
                    {!!Form::text('profesor', null,['id'=>'profesor', 'class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!!form::label('descripcion','Descripcion')!!}
                    {!!form::textarea('descripcion',null,['id'=>'descripcion', 'class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    {!!form::label('cupos_disponibles','Cupos Disponibles')!!}
                    {!!form::number('cupos_disponibles',null,['id'=>'cupos_disponibles','class'=>'form-control'])!!}
                </div>
              </div><hr>
              <div class="col-md-8 col-md-offset-2">
               <a class="btn btn-primary" href="{{ route('electiva.index') }}">Atras</a>
               {!! Form::submit('Guardar Materia',['class'=>'btn btn-success']) !!}
               {!! Form::close() !!}
              </div>
             
            </div>
        </div>
    </div>
</div>

@stop