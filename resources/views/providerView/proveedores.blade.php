@extends('main')

@section('title', 'Proveedores')
@section('active_2', 'class=active')

@section('content')
  <div class="container">
    <ul class="nav nav-tabs">
      <li><a data-toggle="tab" href="#createProvider">Ingresar proveedor</a></li>
    </ul>

    <div class="tab-content">
      <div id="createProvider" class="tab-pane fade">
          @include('providerView.createProvider')
      </div>
    </div>
  </div>

@endsection
