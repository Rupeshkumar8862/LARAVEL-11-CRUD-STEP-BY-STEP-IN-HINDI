@extends('layouts.home')
@section('content')
<div class="conatainer">
    <div class="conatiner-content-center">
        <div class="col-sm-8-4">
            <div class="card-p-4">
                <h1 class="text-danger">VIEW SINGLE DATA</h1>
                <div class="card-body">
                    <p> NAME:  <b>  {{ $fetch_single_data->name  }} </b> </p>
                </div>
                <div class="card-body">
                    <p> Gender:  <b>  {{ $fetch_single_data->gender  }} </b> </p>
                </div>
                <div class="card-body">
                    <p> Email:  <b>  {{ $fetch_single_data->email  }} </b> </p>
                </div>
                <div class="card-body">
                    <p> Message:  <b>  {{ $fetch_single_data->message  }} </b> </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection