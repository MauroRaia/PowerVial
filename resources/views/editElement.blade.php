<!DOCTYPE html>
<html lang="en">
  <head>

    @include('partials._stylesheet')

  </head>
<body>

  <div class="col-md-12">
    <div class='well well-lg'>
    @yield('content-edit')
    </div>
  </div>

</div>

@include('partials._scripts')
</body>
</html>
