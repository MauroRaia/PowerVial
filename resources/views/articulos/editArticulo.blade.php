@extends('inventario')

@section('navtab_2', 'class=active')

@section('content-navtab')

<div class='row'>
  <div class='col-md-8 col-md-offset-2'>
    <h3>Editar informacion del articulo</h3>
    <hr>
    {!! Form::open(array('route' => ['articulos.update', $articulo->id], 'method' => 'put', 'files' => true)) !!}
      {{ Form::label('codigo', 'Codigo:') }}
      {{ Form::text('codigo', $articulo->codigo, array('class' => 'form-control')) }}
      {{ Form::label('nombre', 'Nombre:') }}
      {{ Form::text('nombre', $articulo->nombre, array('class' => 'form-control')) }}
      {{ Form::label('imagen', 'Cargar imagen del articulo:') }}
      {{ Form::file('imagen', $articulo->imagen) }}
      {{ Form::label('descripcion', 'Descripcion:') }}
      {{ Form::textarea('descripcion', $articulo->descripcion, array('class' => 'form-control', 'style' => 'height:100px')) }}
      {{ Form::label('categoria', 'Categoria:') }}
      {{ Form::text('categoria', $articulo->categoria, array('class' => 'form-control'))}}
      {{ Form::label('stock', 'Stock:') }}
      {{ Form::text('stock', $articulo->stock, array('class' => 'form-control')) }}
      {{ Form::label('proveedor_id', 'Proveedor:') }}
      {{ Form::select('proveedor_id', $proveedores,$articulo->proveedor_id, array('class' => 'form-control')) }}
      {{ Form::label('marca_id', 'Marca:') }}
      {{ Form::select('marca_id', $marcas, $articulo->marca_id, array('class' => 'form-control')) }}
      {{ Form::label('familia_id', 'Familia:') }}
      {{ Form::select('familia_id', $familias, $articulo->familia_id, array('class' => 'form-control')) }}
      {{ Form::label('subfamilia_id', 'Subfamilia:') }}
      {{ Form::select('subfamilia_id', $subfamilias, $articulo->subfamilia_id, array('class' => 'form-control')) }}
      {{Form::submit('Guardar articulo', array('class'=>'btn btn-primary btn-lg btn-block', 'style'=>'margin-top:20px; margin-bottom:20px;'))}}
    {!! Form::close() !!}
  </div>
</div>

@endsection
