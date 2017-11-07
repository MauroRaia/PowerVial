@extends('marcasNav')

@section('navtab_1', 'class=active')

@section('content-navtab')

<div class='row'>
  <div class='col-md-12'>
    <h3>Marcas</h3>
    <hr>
      <table class='table table-hover table-bordered'>
        <thead>
          <th class="col-xs-11">Nombre</th>
          <th class="col-xs-1"></th>
        </thead>
        <tbody>
      @foreach ($marc as $m)
        <tr>
          <th class="col-xs-11">{{ $m->nombre}}</th>
          <th class="col-xs-1"> <a href="{{ url('marcas/'.$m->id.'/edit') }}" class='btn btn-default'>Editar</a></th>
        </tr>
      @endforeach
    </tbody>
    </table>
  </div>
</div>

@endsection
