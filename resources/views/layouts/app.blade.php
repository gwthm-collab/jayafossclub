<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <title>@yield('title') - Jaya Foss Club</title>
    <link rel="stylesheet" href="/css/app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{{ asset('img/tux.png') }}}">
  </head>
  <body>
    @include('inc.navbar')
    <div class="container-fluid">
      <div class="row">
          @include('inc.messages')
          @yield('content')
          @include('inc.sidebar')
      </div>
    </div>
    <script src="/js/app.js"></script>
    <footer id="footer" class="text-center">
      Copyright 2018 &copy; Jaya Foss Club
    </footer>
  </body>
</html>