@extends('inventario')

@section('navtab_2', 'class=active')

@section('content-navtab')



<div class='row'>
  <div class='col-md-8 col-md-offset-2'>
    <h3>Ingresar informacion del articulo</h3>
    <hr>
    {!! Form::open(array('route' => 'articulos.store', 'files' => true)) !!}
      {{ Form::label('codigo', 'Codigo:') }}
      {{ Form::text('codigo', null, array('class' => 'form-control')) }}
      {{ Form::label('nombre', 'Nombre:') }}
      {{ Form::text('nombre', null, array('class' => 'form-control')) }}
      {{ Form::label('imagen', 'Cargar imagen del articulo:') }}
      {{ Form::file('imagen') }}
      {{ Form::label('descripcion', 'Descripcion:') }}
      {{ Form::textarea('descripcion', null, array('class' => 'form-control', 'style' => 'height:100px')) }}
      {{ Form::label('categoria', 'Categoria:') }}
      {{ Form::text('categoria', null, array('class' => 'form-control'))}}
      {{ Form::label('stock', 'Stock:') }}
      {{ Form::text('stock', null, array('class' => 'form-control')) }}
      {{ Form::label('proveedor_id', 'Proveedor:') }}
      {{ Form::select('proveedor_id', $proveedores, null, array('class' => 'selectpicker')) }}
      {{ Form::label('marca_id', 'Marca:') }}
      {{ Form::select('marca_id', $marcas, null, array('class' => 'selectpicker')) }}
      {{ Form::label('familia_id', 'Familia:') }}
      {{ Form::select('familia_id', $familias, null, array('class' => 'selectpicker', 'id' => 'familia_in_form', 'onchange' => 'changeSubfamilia(this.value)')) }}
      <br>
        {{ Form::label('subfamilia_id', 'Subfamilia:') }}
        {{ Form::select('subfamilia_id', $subfamilias, null, array('class' => 'selectpicker')) }}
      {{Form::submit('Guardar articulo', array('class'=>'btn btn-primary btn-lg btn-block', 'style'=>'margin-top:20px; margin-bottom:20px;'))}}
    {!! Form::close() !!}

  </div>
</div>


@endsection
