@extends('admin_layouts.main')

@section('title', 'Hotel Edit')

@section('content')
    
<!-- Page Content-->
<div class="container-fluid p-0">    

    <section class="resume-section" id="hotels">
        <div class="resume-section-content">
            <h2 class="mb-5">Update info hotel</h2>
            <h3 class="mb-1">{{ $hotel->name }}</h3>
                        
            <form method="POST" action="{{ route('edit_hotel', ['id' => $hotel->id]) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group my-form">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="{{ $hotel->name }}">
                </div>
                <div class="form-group my-form">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" aria-describedby="emailHelp" placeholder="{{ $hotel->price }}">
                </div>                
                <div class="form-group my-form">
                    <label for="images">Images</label>
                    <br>
                    <input type="file" class="form-control-file" id="images" name="images">
                </div>
                <div class="form-group my-form">
                    <label for="rating">Rating</label>
                    <input type="text" class="form-control" id="rating" name="rating" aria-describedby="emailHelp" placeholder="{{ $hotel->rating }}">
                </div>                
                <div class="form-group my-form">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" aria-describedby="emailHelp" placeholder="{{ $hotel->address }}">
                </div> 
                <div class="form-group my-form">
                    <label for="coordinate">Coordinate</label>
                    <input type="text" class="form-control" id="coordinate" name="coordinate" aria-describedby="emailHelp" placeholder="{{ $hotel->coordinate }}">
                </div> 
                <div class="form-group my-form">
                    <label for="facilities">Facilities</label>
                    <input type="text" class="form-control" id="facilities" name="facilities" aria-describedby="emailHelp" placeholder="{{ $hotel->facilities }}">
                </div> 
                <div class="form-group my-form">
                    <label for="rooms">Rooms</label>
                    <input type="text" class="form-control" id="rooms" name="rooms" aria-describedby="emailHelp" placeholder="{{ $hotel->rooms }}">
                </div> 
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" id="category" name="category">
                      <option>Apartment</option>
                      <option>Resort</option>
                      <option>Hotel</option>
                      <option>Villa</option>                      
                    </select>
                </div>     
                <br><br>                                                                                           
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </section>
    <hr class="m-0" />

</div>
@endsection
