@extends('inventario')

@section('navtab_1', 'class=active')

@section('content-navtab')

  {!! Form::open(array('route' => 'articulos.find')) !!}

    {{ Form::select('field', $filtro, array('class' => 'form-control')) }} <span>
    {{ Form::submit('Buscar', array('class'=>'btn btn-primary btn-lg', 'style'=>'margin-top:20px; margin-bottom:20px;'))}} </span>
    {{ Form::text('value', null, array('class' => 'form-control')) }}

  {!! Form::close() !!}

<div class='row'>
  <div class='col-md-12'>
    <hr>
    <h3>Articulos</h3>
    <hr>
      <table class='table table-hover table-bordered'>
        <thead>
          <th class="col-xs-2">Codigo</th>
          <th class="col-xs-2">Nombre</th>
          <th class="col-xs-1">Stock</th>
          <th class="col-xs-2">Familia</th>
          <th class="col-xs-4">Descripcion</th>
          <th class="col-xs-1"></th>
        </thead>
        <tbody>
      @foreach ($art as $a)
        <tr>
          <th class="col-xs-2">{{ $a->codigo}}</th>
          <th class="col-xs-2">{{ $a->nombre }}</th>
          <th class="col-xs-1">{{ $a->stock }}</th>
          <th class="col-xs-2">{{ $a->familia->nombre }}</th>
          <th class="col-xs-4">{{ $a->descripcion }}</th>
          <th class="col-xs-1"> <a href="{{ url('articulos/'.$a->id) }}" target='_blank' class='btn btn-default'>Ver</a></th>
        </tr>
      @endforeach
    </tbody>
    </table>
  </div>
</div>

@endsection
