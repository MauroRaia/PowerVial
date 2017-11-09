@extends('inventario')

@section('navtab_1', 'class=active')

@section('content-navtab')

<div class="panel panel-default">

<div class="panel-heading">Filtrar por</div>

<div class="panel-body">

<div class="row">

      <div class="col-md-12">

        {!! Form::open(array('route' => 'articulos.find')) !!}

        <div class="col-md-2">
          {{ Form::select('field', $filtro, null, ['class' => 'selectpicker']) }}
        </div>

        <div class="col-md-8">
          {{ Form::text('value', null, array('class' => 'form-control')) }}
        </div>

        <div class="col-md-2">
          {{ Form::submit('Buscar', array('class'=>'btn btn-primary btn-block'))}}
        </div>
        {!! Form::close() !!}

      </div>

</div>

</div>

</div>

<div class='row'>
  <div class='col-md-12'>
    <hr>
    <h3>Articulos</h3>
    <hr>
      <table class='table table-hover table-bordered'>
        <thead>
          <th class="col-xs-1">Codigo</th>
          <th class="col-xs-1">Nombre</th>
          <th class="col-xs-1">Stock</th>
          <th class="col-xs-2">Familia</th>
          <th class="col-xs-2">Subfamilia</th>
          <th class="col-xs-4">Descripcion</th>
          <th class="col-xs-1"></th>
        </thead>
        <tbody>
      @foreach ($art as $a)
        <tr>
          <th class="col-xs-1">{{ $a->codigo}}</th>
          <th class="col-xs-1">{{ $a->nombre }}</th>
          <th class="col-xs-1">{{ $a->stock }}</th>
          <th class="col-xs-2">{{ $a->familia->nombre }}</th>
          <th class="col-xs-2">{{ $a->subfamilia->nombre }}</th>
          <th class="col-xs-4">{{ $a->descripcion }}</th>
          <th class="col-xs-1"><button type="button" class="btn btn-show" data-toggle="modal" data-target="#myModal">Ver</button></th>

          <!-- Modal -->
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-md">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header" style="background-color: #0B3861; color:#FAFAFA;">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Codigo: {{$a->codigo}}</h4>
                </div>
                  <div class="col-md-12" style="margin-top:20px;">

                      <div class="col-md-4">


                      <li><p>Nombre: {{$a->nombre}}</p></li>
                      <li><p>Stock: {{$a->stock}}</p></li>
                      <li><p>Familia: {{$a->familia->nombre}}</p></li>
                      <li><p>Subfamilia: {{$a->subfamilia->nombre}}</p></li>
                      <li><p>Marca: {{$a->marca->nombre}}</p></li>
                      <li><p>Proveedor: {{$a->proveedor->nombre_comercial}}</p></li>
                      <li><p>Descripcion: {{$a->descripcion}}</p></li>
                      <li><p>Categoria: {{$a->categoria}}</p></li>
                      <li><p>Articulos que reemplaza:</p></li>
                      <ul>
                      @foreach ($a->mi_reemplazo as $r)
                           <li><p>{{$r->codigo}} - {{$r->nombre}}</p></li>
                      @endforeach
                      </ul>

                      <a type='button' href="{{ url('articulos/'.$a->id.'/edit') }}" class="btn btn-show btn-block" style="margin-bottom:20px;">Editar</a>

                      </div>

                        <div class="col-md-8">

                          <div class="well" style="height:300px; background-color:#191919;">
                            <img src= "{{ asset('images/articulos/' . $a->imagen) }}">
                          </div>

                        </div>

                  </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-show btn-block" data-dismiss="modal">Cerrar</button>
                </div>
              </div>

            </div>
          </div>

        </tr>
      @endforeach
    </tbody>
    </table>
  </div>
</div>



@endsection
