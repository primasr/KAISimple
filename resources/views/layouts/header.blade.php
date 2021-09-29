  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{ route('homepage') }}">DTStay</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ route('homepage') }}">Home</a></li>          

        @if (Route::currentRouteName() == "homepage")                    
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">List of Hotels</a></li>            
        @endif

          @guest
              @if (Route::has('login'))
                <li>
                  <a href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>                  
              @endif

              @if (Route::has('register'))
                <li>
                  <a href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
              @endif
          @else
              <li class="drop-down"><a href="">{{ Auth::user()->name }}</a>
                <ul>
                  <li><a href="{{ route('profile', ['id' => Auth::user()->id]) }}">Profile</a></li>

                  @if (Auth::user()->role_id == 1)
                    <li><a href="{{ route('booking_history', ['id' => Auth::user()->id]) }}">Booking History</a></li>                    
                  @endif

                  @if (Auth::user()->role_id == 0)
                    <li><a href="{{ route('admin_homepage') }}">Admin Page</a></li>                    
                  @endif

                  <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();" > {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form> 
                  </li>

                </ul>
              </li>              
          @endguest            

          {{-- Login and Register --}}

        </ul>
      </nav><!-- .nav-menu -->

      {{-- <a href="#about" class="get-started-btn scrollto">Get Started</a> --}}    

    </div>
  </header><!-- End Header -->