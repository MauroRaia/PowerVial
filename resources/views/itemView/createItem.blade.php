<div class='row'>
  <div class='col-md-8 col-md-offset-2'>
    <h3>Ingresar informacion del item</h3>
    <hr>
    {!! Form::open(array('route' => 'items.store')) !!}
      {{ Form::label('code', 'Codigo:') }}
      {{ Form::text('code', null, array('class' => 'form-control')) }}
      {{ Form::label('name', 'Nombre:') }}
      {{ Form::text('name', null, array('class' => 'form-control')) }}
      {{ Form::label('description', 'Descripcion:') }}
      {{ Form::textarea('description', null, array('class' => 'form-control', 'style' => 'height:100px')) }}
      {{Form::submit('Guardar item', array('class'=>'btn btn-primary btn-lg btn-block', 'style'=>'margin-top:20px; margin-bottom:20px;'))}}
    {!! Form::close() !!}
  </div>
</div>
