@extends('layouts.main-inner')

@section('title', $hotel->name)

@section('content')

<main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            @php
                $str = explode(",", $hotel->images);
            @endphp
            @foreach ($str as $entahlah)
                <img src="{{ asset("img/hotels/$entahlah") }}" class="img-fluid" alt="">                
            @endforeach
          </div>

          <div class="portfolio-info">
            <h3>Train Info</h3>
            @php
              $hasil_rupiah = "Rp " . number_format($hotel->price,2,',','.');
            @endphp
            <table class="table">
              <tbody>
                <tr>
                  <th>Train Name</th>
                  <td>{{ $hotel->name }}</td>
                </tr>
                <tr>
                  <th>Price</th>
                  <td>{{ $hasil_rupiah }}</td>
                </tr>
                <tr>
                  <th>Origin Station</th>
                  <td>{{ $hotel->stasiun_awal }}</td>
                </tr>
                <tr>
                  <th>End Station</th>
                  <td>{{ $hotel->stasiun_akhir }}</td>
                </tr>
                <tr>
                  <th>Category</th>
                  <td>{{ $hotel->category }}</td>
                </tr>
              </tbody>
            </table>
            {{-- <ul>
              <li><strong>Name</strong>: {{ $hotel->name }}</li>
              @php
                  $hasil_rupiah = "Rp " . number_format($hotel->price,2,',','.');
              @endphp
              <li><strong>Price</strong>: {{ $hasil_rupiah }}</li>
              <li><strong>Address</strong>: {{ $hotel->address }}</li>
              <li><strong>Origin Station</strong>: {{ $hotel->stasiun_awal }}</li>
              <li><strong>End Station</strong>: {{ $hotel->stasiun_akhir }}</li>
              <li><strong>Category</strong>: {{ $hotel->category }}</li>
              <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>              
            </ul> --}}

            <!-- ======= Cta Section ======= -->
            <section id="cta" class="cta" style="padding: 40px 0px">
                <div class="container">                      

                @if (Auth::check())
                  <div class="text-center">            
                      {{-- <a class="cta-btn" href="#">Book Now</a> --}}
                      <a class="cta-btn" href="{{ route('booking') }}" onclick="event.preventDefault();
                      document.getElementById('booking-form').submit();"> 
                      {{ __('Book Now') }}
                      </a>
                      <form id="booking-form" action="{{ route('booking') }}" method="POST" class="d-none">
                          @csrf
                          <input type="hidden" id="id_user" name="id_user" value="{{ Auth::user()->id }}">
                          <input type="hidden" id="id_hotel" name="id_hotel" value="{{ $hotel->id }}">
                      </form>
                  </div>                  
                @endif
        
                </div>
            </section><!-- End Cta Section -->

          </div>

        </div>
{{-- 

        <div class="portfolio-description" style="padding-top: 100px">
          <h2>Facilites</h2>
          <p>
            Some of the facilities provided are:
          </p>
          <ol>
              @php
                  $facilities = explode(",", $hotel->facilities);
              @endphp
              @foreach ($facilities as $facility)
                <li>{{ $facility }}</li>                  
              @endforeach
          </ol>

        </div>

        <div class="portfolio-description">
            <h2>Location</h2>
            <p>
                {{ $hotel->address }}
            </p>
            <div class="row justify-content-center">                
                <iframe src="{{ $hotel->coordinate }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div> --}}
        
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

@endsection