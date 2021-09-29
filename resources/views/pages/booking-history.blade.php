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
                            <th scope="col">Origin Station</th>
                            <th scope="col">End Station</th>
                            <th scope="col">Category</th>
                            <th scope="col">Payment Status</th>
                            <th scope="col">Remove</th>                            
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                                $j = 0;
                                $total_bayaran = 0;
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
                                $total_bayaran = $total_bayaran + $hotel->price;
                                @endphp
                              <td>{{ $hasil_rupiah }}</td>
                                @php
                                $str = explode(",", $hotel->images);
                                $first_hotel_image = $str[0];
                                @endphp 
                              <td><img src="{{ asset("img/hotels/$first_hotel_image") }}" alt="" width="100px" height="100px"></td>
                              <td>{{ $hotel->stasiun_awal }}</td>
                              <td>{{ $hotel->stasiun_akhir }}</td>                              
                              <td>{{ $hotel->category }}</td>                                   
                              <td>
                                @if ($hotel->status_bayar == "Yes")
                                  <span style="color: green">{{ $hotel->status_bayar }}</span>    
                                @else
                                  <span style="color: red">{{ $hotel->status_bayar }}</span> 
                                @endif                                 
                              </td>
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

    <br><br>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Booking History</div>
      
            <div class="card-body">
              @php
                $saldo = $responseTemp[0]->money;
                $payout = $total_bayaran;
                $sisa = $saldo - $payout;
              @endphp
              <table class="table">
                <tbody>
                  <tr>
                    <th>Your Balance</th>
                    <td>Rp {{ number_format($saldo,2) }}</td>
                  </tr>
                  <tr>
                    <th>Total Payout</th>
                    <td>Rp {{ number_format($payout,2) }}</td>
                  </tr>
                  <tr>
                    <th>Rest of Balance</th>
                    @if ($sisa > 0)
                    <td>Rp <span style="color: green">{{ number_format($sisa,2) }}</span></td>    
                    @else
                    <td>Rp <span style="color: red">{{ number_format($sisa,2) }}</span></td> 
                    @endif                     
                  </tr>
                  @if ($sisa > 0 && $hotels)
                  <tr>
                    <th>Pay</th>
                    <td>                      
                      <button type="button" class="btn btn-success">
                        <a href="{{ route('bayar_kereta', ['id' => Auth::user()->id, 'money' => $payout]) }}" onclick="event.preventDefault();
                          document.getElementById('remove-booking-form-{{ Auth::user()->id }}').submit();"><span style="color: white">Pay</span></a>
                        <form id="remove-booking-form-{{ Auth::user()->id }}" action="{{ route('bayar_kereta', ['id' => Auth::user()->id, 'money' => $payout]) }}" method="POST" class="d-none">
                          @csrf
                        </form>
                      </button>
                    </td>
                  </tr>                    
                  @endif
                </tbody>
              </table>

            </div>
          </div>
        </div>          
      </div>
    </div>
</div>
@endsection