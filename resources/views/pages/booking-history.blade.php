@extends('layouts.main-inner')

@section('title', 'Booking History')

{{-- @dd($hotels) --}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Booking History</div>
            
                <div class="card-body">                  
                    <table class="table table-striped">
                        <thead class="thead-dark">
                          <tr style="text-align: center">
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price (Rp )</th>
                            <th scope="col">Images</th>
                            <th scope="col">Rating</th>
                            <th scope="col">Address</th>
                            <th scope="col">Rooms</th>
                            <th scope="col">Category</th>
                            <th scope="col">Remove</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                                $j = 0;
                            @endphp
                            @foreach ($hotels as $hotel)
                            <tr style="text-align: center">
                              <th scope="row">{{ $i }}</th>
                              @php
                                  $i++;
                              @endphp
                              <td>{{ $hotel->name }}</td>
                                @php
                                $hasil_rupiah = number_format($hotel->price,2,',','.');
                                @endphp
                              <td>{{ $hasil_rupiah }}</td>
                                @php
                                $str = explode(",", $hotel->images);
                                $first_hotel_image = $str[0];
                                @endphp 
                              <td><img src="{{ asset("img/hotels/$first_hotel_image") }}" alt="" width="100px" height="100px"></td>
                              <td>{{ $hotel->rating }} / 100</td>
                              <td>{{ $hotel->address }}</td>
                              <td>{{ $hotel->rooms }}</td>
                              <td>{{ $hotel->category }}</td>                                   
                              <td>
                                <button type="button" class="btn btn-danger">
                                  <a href="{{ route('remove_booking', ['id' => $booking_list_id[$j]]) }}" onclick="event.preventDefault();
                                    document.getElementById('remove-booking-form-{{ $booking_list_id[$j] }}').submit();"><span style="color: white">Remove</span></a>
                                  <form id="remove-booking-form-{{ $booking_list_id[$j] }}" action="{{ route('remove_booking', ['id' => $booking_list_id[$j]]) }}" method="POST" class="d-none">
                                    @csrf
                                  </form>
                                </button>
                                </td> 
                                @php
                                    $j++;
                                @endphp

                            </tr>                        
                            @endforeach
                          <tr>
                        </tbody>
                    </table>                     
                </div>

            </div>
        </div>
    </div>
</div>
@endsection