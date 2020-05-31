<!DOCTYPE html>
<html lang="es">
  <head>
    <title>EvM Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   @include('includes.links')

   @yield('zoom')
    
  </head>
  <body>
  
  <div class="site-wrap">
    

    @include('includes.nav')
    
    @yield('content')

    @include('includes.footer')
  </div>

  @include('includes.scripts')
  @yield('zoomscript')
  </body>
</html>