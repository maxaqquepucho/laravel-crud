
@extends('layouts.app')

@section('title', 'Triners Show')

@section('content')

    <div class="col-sm-8-md-4">
        <img class="MX-AUTO d-block" height="200" width="300"  src="/images/{{$trainer->avatar}}" alt="Card image cap">
        <div class="text-center">
            <h5 class="card-title">{{$trainer->name}}</h5>
            <h3>{{$trainer->slug}}</h3>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

        </div>
    </div>

@endsection
