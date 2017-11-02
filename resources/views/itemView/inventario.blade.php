@extends('main')

@section('title', 'Inventario')
@section('active_1', 'class=active')

@section('content')

<div class="container">
  <ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#createArticulo">Ingresar articulo</a></li>
  </ul>

  <div class="tab-content">
    <div id="createArticulo" class="tab-pane fade">
        @include('articulos.createArticulo')
    </div>
  </div>
</div>

@endsection
