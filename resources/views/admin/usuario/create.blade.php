@extends('layouts.app')

@section('content')

<div class="row row-offcanvas row-offcanvas-right text-center">
    <div class="col-xs-12 col-sm-12">
          <div class="panel panel-primary">
            <div class="panel-heading">Agregar Nuevo Usuario</div>
              <div class="panel-body">
                <br>

              {!! Form::open(['route'=>'usuario.store','method'=>'POST'])!!}
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
                    {!!form::label('email','Correo Electronico')!!}
                    {!!form::text('email',null,['id'=>'email', 'class'=>'form-control','placeholder'=>'Digite Correo Electronico'])!!}
                </div>
                <div class="form-group">
                    {!!form::label('password','Contraseña')!!}
                    {!!form::password('password',['id'=>'password','class'=>'form-control','placeholder'=>'Digite la Contraseña'])!!}
                </div>
                <div class="form-group">
                    {!!form::label('rol', 'Tipo Usuario')!!}
                    {!!Form::select('rol', ['admin'=>'Administrador','estudiante'=>'Estudiante','usuario'=>'Usuario'], null,[ 'class'=>'form-control']) !!}
                </div>
              </div><hr>
              <div class="col-md-8 col-md-offset-2">
               <a class="btn btn-primary" href="{{ route('usuario.index') }}">Atras</a>
               {!! Form::submit('Guardar Usuario',['class'=>'btn btn-success']) !!}
               {!! Form::close() !!}
              </div>
             
            </div>
        </div>
    </div>
</div>

@stop