<div class='row'>
  <div class='col-md-8 col-md-offset-2'>
    <h3>Ingresar informacion de la familia</h3>
    <hr>
    {!! Form::open(array('route' => ['familias.update', $familia->id], 'method' => 'put')) !!}
      {{ Form::label('nombre', 'Nombre:') }}
      {{ Form::text('nombre', $familia->nombre, array('class' => 'form-control')) }}
      {{ Form::submit('Guardar familia', array('class'=>'btn btn-primary btn-lg btn-block', 'style'=>'margin-top:20px; margin-bottom:20px;')) }}
    {!! Form::close() !!}
  </div>
</div>
