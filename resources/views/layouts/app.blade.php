<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Fashi Template" />
    <meta name="keywords" content="Fashi, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>@yield('title')</title>

    {{-- Style --}}
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')

  </head>

  <body>
    {{-- Preloader --}}
    @include('includes.preloader')

    {{-- Header --}}
    @include('includes.header')

    {{-- Page Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('includes.footer')

    {{-- Script --}}
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')

  </body>
</html>