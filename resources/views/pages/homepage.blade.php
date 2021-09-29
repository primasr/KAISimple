  @extends('layouts.main')

  @section('title', 'DTStay')

  @section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>DTStay</h1>
          <h2>Do you want to stay? Then you have to pay</h2>
          <div class="d-flex">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a> --}}
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="{{ asset('sheesh/assets/img/hotel-3.png') }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    {{-- <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="icofont-computer"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-image"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-tasks-alt"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section --> --}}

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="{{ asset('sheesh/assets/img/about.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>Let's get closer with "DTStay"</h3>
            <p class="font-italic">
              DTStay is a hotel booking application that provides many profitable services
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Affordable Prices</li>
              <li><i class="icofont-check-circled"></i> Very Trustworthy</li>
              <li><i class="icofont-check-circled"></i> Easy Process</li>
            </ul>
            <p>
              Come on, know more about DTStay so that you are closer to the dream of relaxing!
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">6969</span>
            <p>Customers</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">696</span>
            <p>Hotel Partners</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">69,696</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">69</span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <span>Services</span>
          <h2>Services</h2>
          <p>Services provided on DTStay</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Affordable Prices</a></h4>
              <p>You don't need to spend a lot of money to enjoy your vacation</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Very Trustworthy</a></h4>
              <p>So many (6969) satisfied customers with our services</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Easy Process</a></h4>
              <p>The ordering process is just a few clicks without the need to confuse you</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>List of Hotels</span>
          <h2>List of Hotels</h2>
          <p>Choose your favorite place here</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-apartment">Apartment</li>
              <li data-filter=".filter-resort">Resort</li>
              <li data-filter=".filter-hotel">Hotel</li>
              <li data-filter=".filter-villa">Villa</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          @foreach ($hotels as $hotel)

          <div class="col-lg-4 col-md-6 portfolio-item filter-{{ strtolower($hotel->category) }}">
            @php
              $str = explode(",", $hotel->images);
              $first_hotel_image = $str[0];
            @endphp 
            <img src="{{ asset("img/hotels/$first_hotel_image") }}" class="img-fluid" alt="{{ $hotel->name }}">
            <div class="portfolio-info">
              <h4>{{ $hotel->name }}</h4>
              <p>Rooms: {{ $hotel->rooms }}</p>
              <a href="{{ asset("img/hotels/$first_hotel_image") }}" data-gall="portfolioGallery" class="venobox preview-link" title="{{ $hotel->category }} {{ $hotel->id }}"><i class="bx bx-plus"></i></a>
              <a href="{{ route('show_hotels', ['id' => $hotel->id]) }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          
          @endforeach


        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <span>Testimonials</span>
          <h2>Testimonials</h2>
          <p>Testimonials from our customers</p>
        </div>

        <div class="owl-carousel testimonials-carousel">


          @foreach ($testimonials as $testimonial)

          <div class="testimonial-item" style="display: flex; flex-direction: column;">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              {{ $testimonial->testimonial }}
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>            
            <div style="margin-top: auto;">              
              <img src="{{ asset("img/testimonials/$testimonial->photo") }}" class="testimonial-img" alt="{{ $testimonial->name }}">
              <h3>{{ $testimonial->name }}</h3>
              <h4>{{ $testimonial->position }}</h4>
            </div>
          </div>
            
          @endforeach

        </div>

      </div>
    </section><!-- End Testimonials Section -->        

  </main><!-- End #main -->
  @endsection