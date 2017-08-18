<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="/css/app.css" rel="stylesheet">
  </head>
  <body>

    @include('layouts.navbar')

    <div class="container-fluid">
      <h1 class="text-center">Address Book</h1>
    </div>


    @yield('content')

    <script src="/js/app.js"></script>
  </body>
</html>