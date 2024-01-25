<html>

  <head>
    <title>
      @yield('titulo')
    </title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <script type="text/javascript" src="/js/app.js"></script>
  </head>

  <body>
    @include('partials.nav')
    <main>
      @yield('contenido')
    </main>
    @include('partials.footer')
  </body>

</html>