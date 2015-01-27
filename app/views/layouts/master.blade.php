<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('titulo')</title>
  <script src="js/app.js" type="text/javascript"></script>
</head>
<body>
  @include('layouts.header')
  @yield('contenido')
</body>
</html>