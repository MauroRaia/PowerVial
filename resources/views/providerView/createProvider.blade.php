<div class='row'>
  <div class='col-md-8 col-md-offset-2'>
    <h3>Ingresar datos del proveedor</h3>
    <hr>
    {!! Form::open(array('route' => 'providers.store', 'onsubmit' => 'hide()')) !!}
      {{ Form::label('name', 'Nombre:') }}
      {{ Form::text('name', null, array('class' => 'form-control')) }}
      {{ Form::label('email', 'Email:') }}
      {{ Form::text('email', null, array('class' => 'form-control')) }}
      {{ Form::label('number', 'Numero:') }}
      {{ Form::text('number', null, array('class' => 'form-control')) }}
      {{Form::submit('Guardar proveedor', array('class'=>'btn btn-primary btn-lg btn-block', 'style'=>'margin-top:20px; margin-bottom:20px;'))}}
    {!! Form::close() !!}
  </div>
</div>
