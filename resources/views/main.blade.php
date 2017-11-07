<!DOCTYPE html>
<html lang="en">
  <head>

    @include('partials._stylesheet')

  </head>
<body>

<div class="jumbotron">
    <h1>Inicio</h1>
</div>

@include('partials._navigation')

<div class="col-md-12">
  <div class='well well-lg'>
  @yield('content')
  </div>
</div>

</div>

@include('partials._scripts')
</body>
</html>
