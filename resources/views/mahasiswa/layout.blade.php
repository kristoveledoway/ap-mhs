<!DOCTYPE html>
  <html hola_ext_inject="enabled">
    <head>
      <meta charset="utf-8">
      <title>Blog</title>
      @yield('style')
    </head>
    <body>

      @yield('navbar')
      @yield('content')

    </body>
    @yield('script')
</html>
