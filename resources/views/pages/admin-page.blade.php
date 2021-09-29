@extends('admin_layouts.main')

@section('title', 'Admin Page')

@section('content')
    
<!-- Page Content-->
<div class="container-fluid p-0">

    <!-- About-->
    <section class="resume-section" id="about">
        <div class="resume-section-content">
            <h1 class="mb-0">
                Hello, {{ Auth::user()->name }}
                {{-- <span class="text-primary">Taylor</span> --}}
            </h1>
            <div class="subheading mb-5">
                {{ Auth::user()->phone }} ·
                <a href="#">{{ Auth::user()->email }}</a>
            </div>
            <p class="lead mb-5">This is your Admin Page</p>
        </div>
    </section>
    <hr class="m-0" />

    <!-- Users -->
    <section class="resume-section" id="users">
        <div class="resume-section-content">
            <h2 class="mb-5">List of Users</h2>
            <table class="table table-striped">
                <thead class="thead-dark">
                  <tr style="text-align: center">
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Role</th>
                    <th scope="col">Updated at</th>
                    {{-- <th scope="col">Edit</th> --}}
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr style="text-align: center">
                      <th scope="row">{{ $user->id }}</th>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td><img src="{{ asset("img/users/$user->photo") }}" alt="" width="100px" height="100px"></td>                      
                      <td>{{ $user->phone }}</td>
                      @php
                          if($user->role_id == 0){
                              $user_role = "Admin";
                          } else {
                            $user_role = "User";
                          }
                      @endphp
                      <td>{{ $user_role }}</td>
                      <td>{{ $user->updated_at }}</td>
                        {{-- <td>
                            <button type="button" class="btn btn-primary">
                            <a href="{{ route('show_hotel', ['id' => $hotel->id]) }}"><span style="color: white">Edit</span></a>
                            </button>
                        </td> --}}
                        <td>
                            <button type="button" class="btn btn-danger">
                              <a href="{{ route('delete_user', ['id' => $user->id]) }}" onclick="event.preventDefault();
                                document.getElementById('delete-user-form-{{ $user->id }}').submit();"><span style="color: white">Delete</span></a>
                              <form id="delete-user-form-{{ $user->id }}" action="{{ route('delete_user', ['id' => $user->id]) }}" method="POST" class="d-none">
                                @csrf
                              </form>
                            </button>
                        </td>                                   
                    </tr>                        
                    @endforeach
                  <tr>
                </tbody>
              </table>            
        </div>
    </section>
    <hr class="m-0" />     

    <!-- Hotels -->
    <section class="resume-section" id="hotels">
        <div class="resume-section-content">
            <h2 class="mb-5">List of Hotels</h2>
            <table class="table table-striped">
                <thead class="thead-dark">
                  <tr style="text-align: center">
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price (Rp )</th>
                    <th scope="col">Images</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Address</th>
                    <th scope="col">Rooms</th>
                    <th scope="col">Category</th>
                    <th scope="col">Updated at</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($hotels as $hotel)
                    <tr style="text-align: center">
                      <th scope="row">{{ $hotel->id }}</th>
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
                      <td>{{ $hotel->updated_at }}</td>
                        <td>
                            <button type="button" class="btn btn-primary">
                            <a href="{{ route('show_hotel', ['id' => $hotel->id]) }}"><span style="color: white">Edit</span></a>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger">
                              <a href="{{ route('delete_hotel', ['id' => $hotel->id]) }}" onclick="event.preventDefault();
                                document.getElementById('delete-form-{{ $hotel->id }}').submit();"><span style="color: white">Delete</span></a>
                              <form id="delete-form-{{ $hotel->id }}" action="{{ route('delete_hotel', ['id' => $hotel->id]) }}" method="POST" class="d-none">
                                @csrf
                              </form>
                            </button>
                        </td>                                    
                    </tr>                        
                    @endforeach
                  <tr>
                </tbody>
              </table>            
        </div>
    </section>
    <hr class="m-0" />
    
    <!-- Testimonials -->
    <section class="resume-section" id="testimonials">
        <div class="resume-section-content">
            <h2 class="mb-5">List of Testimonials</h2>
            <table class="table table-striped">
                {{-- $table->string('name');
                $table->string('position');
                $table->string('photo');
                $table->text('testimonial'); --}}
                <thead class="thead-dark">
                  <tr style="text-align: center">
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Testimonial</th>                    
                    {{-- <th scope="col">Edit</th> --}}
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($testimonials as $testimonial)
                    <tr style="text-align: center">
                      <th scope="row">{{ $testimonial->id }}</th>
                      <td>{{ $testimonial->name }}</td>
                      <td>{{ $testimonial->position }}</td>
                      <td><img src="{{ asset("img/testimonials/$testimonial->photo") }}" alt="" width="100px" height="100px"></td>                      
                      <td>{{ $testimonial->testimonial }}</td>
                        {{-- <td>
                            <button type="button" class="btn btn-primary">
                            <a href="{{ route('show_testimonial', ['id' => $testimonial->id]) }}"><span style="color: white">Edit</span></a>
                            </button>
                        </td> --}}
                        <td>
                            <button type="button" class="btn btn-danger">
                              <a href="{{ route('delete_testimonial', ['id' => $testimonial->id]) }}" onclick="event.preventDefault();
                                document.getElementById('delete-form-{{ $testimonial->id }}').submit();"><span style="color: white">Delete</span></a>
                              <form id="delete-form-{{ $testimonial->id }}" action="{{ route('delete_testimonial', ['id' => $testimonial->id]) }}" method="POST" class="d-none">
                                @csrf
                              </form>
                            </button>
                        </td>                                    
                    </tr>                        
                    @endforeach
                  <tr>
                </tbody>
              </table>            
        </div>
    </section>
    <hr class="m-0" />    
</div>
@endsection
