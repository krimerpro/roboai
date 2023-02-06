<!doctype html>
<html lang="en-US">
  <head>
     @include('includes.head')
  </head>

  <body class="bg-color-home-four">
     <header class="row">
         @include('includes.header')
     </header>

     @yield('content')

     <footer class="row">
         @include('includes.footer')
     </footer>
  </body>
</html>
