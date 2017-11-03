@extends('marcasNav')

@section('navtab_4', 'class=active')

@section('content-navtab')

<div class='row'>
  <div class='col-md-8 col-md-offset-2'>
    <h3>Ingresar informacion de la marca</h3>
    <hr>
    {!! Form::open(array('route' => 'marcas.store')) !!}
      {{ Form::label('nombre', 'Nombre:') }}
      {{ Form::text('nombre', null, array('class' => 'form-control')) }}
      {{Form::submit('Guardar marca', array('class'=>'btn btn-primary btn-lg btn-block', 'style'=>'margin-top:20px; margin-bottom:20px;'))}}
    {!! Form::close() !!}
  </div>
</div>

@endsection