@extends('main')

@section('title', 'Marcas')
@section('active_4', 'class=active')

@section('content')

  <div class="row">
      <div class="col-sm-3">


        <nav class="navbar navbar-inverse sidebar" role="navigation">
            <div class="container-fluid">
        		<div class="navbar-header">
        			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        				<span class="sr-only">Toggle navigation</span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        			</button>
        			<a class="navbar-brand" href="#">Opciones</a>
        		</div>
        		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
        			<ul class="nav navbar-nav">
        				<li @yield('navtab_1')><a href="{{ url('marcas') }}">Marcas</a></li>
        				<li @yield('navtab_2')><a href="{{ url('marcas/create') }}">Agregar marca</a></li>
        			</ul>
        		</div>
        	</div>
        </nav>


      </div>
      <div class="col-sm-9">
        <div class="well" style='background-color:#222;'>
                @yield('content-navtab')
        </div>

      </div>
  </div>


@endsection
