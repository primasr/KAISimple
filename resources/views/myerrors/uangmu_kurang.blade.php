@extends('layouts.main-inner')

@section('title', 'Email not Found')

@dd($responseTemp)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-left: 50px">
                <div class="card-header">Error</div>                

                <h3>Your Balance is not enough</h3>                

            </div>
        </div>
    </div>
</div>
@endsection