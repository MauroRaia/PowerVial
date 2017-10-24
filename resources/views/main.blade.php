<!DOCTYPE html>
<html lang="en">
  <head>

    @include('partials._stylesheet')

  </head>
<body>

<div class="jumbotron">
    <h1>Prueba titulo 1</h1>
</div>

@include('partials._navigation')

<div class="container">
  @yield('content')
</div>

</div>

@include('partials._scripts')
</body>
</html>
