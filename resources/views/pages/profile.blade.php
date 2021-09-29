@extends('layouts.main-inner')

@section('title', 'Profile')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-left: 50px">
                <div class="card-header">Profile</div>

                <div class="card-body" style="margin-left: 180px">
                    <img src="{{ asset("img/users/$profile->photo") }}" alt="Card image cap" width="150px" height="150px">     
                </div >               
                <div class="card-body" style="margin-left: 180px">                  
                    <form method="POST" action="{{ route('edit_profile', ['id' => $profile->id]) }}" enctype="multipart/form-data">
                        @csrf        
                        
                        <div class="form-group my-form w-75">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="{{ $profile->name }}">
                        </div>
                        <div class="form-group my-form w-75">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="{{ $profile->email }}">
                        </div>                
                        <div class="form-group my-form w-75">
                            <label for="photo">Photo</label>
                            <br>
                            <input type="file" class="form-control-file" id="photo" name="photo">
                        </div>
                        <div class="form-group my-form w-75">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="emailHelp" placeholder="{{ $profile->phone }}">
                        </div>                                                    
                                
                        <br><br>                                                                                           
                        <button type="submit" class="btn btn-primary" name="submit">Update</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection