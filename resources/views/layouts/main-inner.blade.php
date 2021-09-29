<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('sheesh/assets/img/hotel-3.png') }}" rel="icon">
  <link href="{{ asset('sheesh/assets/img/hotel-3.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('sheesh/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('sheesh/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('sheesh/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('sheesh/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('sheesh/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('sheesh/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eNno - v2.2.1
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('layouts.header')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>@yield('title')</h2>
          <ol>
            <li><a href="{{ route('homepage') }}">Home</a></li>
            <li>@yield('title')</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
          @yield('content')
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.footer')

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('sheesh/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('sheesh/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('sheesh/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('sheesh/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('sheesh/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('sheesh/assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('sheesh/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('sheesh/assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('sheesh/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('sheesh/assets/js/main.js') }}"></script>

</body>

</html>