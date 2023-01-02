<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>

  <meta content="" name="description">
  <meta content="" name="keywords">

{{-- Style --}}
@stack('before-style')
@include('includes.hello-style')
@stack('after-style')

  <!-- =======================================================
  * Template Name: HeroBiz - v2.4.0
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <div id="preloader">
      <div class="loader"></div>
    </div>

    {{-- Header --}}
    @include('includes.hello-header')

    @yield('content')

  {{-- Footer --}}
  @include('includes.hello-footer')

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  {{-- Script --}}
    @stack('before-script')
    @include('includes.hello-script')
    @stack('after-script')

</body>

</html>
