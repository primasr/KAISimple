@extends('layouts.main-inner')

@section('title', 'Email not Found')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-left: 50px">
                <div class="card-header">Error</div>                

                <h3>Your email not found in Thirt-Party Application</h3>
                <h3>Please register in <a href="https://simple-e-wallet.herokuapp.com">here</a> too...</h3>
                {{-- <h3>{{ $email }}</h3>
                <h3>{{ $url }}</h3>
                <h3>{{ $message }}</h3> --}}

            </div>
        </div>
    </div>
</div>
@endsection