@extends('layouts.home')
@section('content')

<div class="container">
    <div class="container-content-center">
        <div class="col-sm-mt-4">
            <div class="card-4">
                <h1>VIEW DETAILS</h1> <br><br> <br>
                <p>Email: <b> {{$fetchsigledata->email}}  </b></p><br><br> <br>
                <p>Message: <b>{{$fetchsigledata->message}}</b></p>
            </div>
        </div>
    </div>
</div>

@endsection