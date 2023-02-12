<!doctype html>
<html lang="en-US">
  <head>
     @include('includes.head')
  </head>

  <body data-spy="scroll" data-target=".navbar" data-offset="70">
     <header class="row">
         @include('includes.header')
     </header>

     @yield('content')

     <footer class="row">
         @include('includes.footer')
     </footer>
  </body>
</html>
