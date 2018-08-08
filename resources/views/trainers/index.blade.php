
@extends('layouts.app')

@section('title', 'Triners')

@section('content')

        <div class="row">
            @foreach ($trainers as $trainer)
                <div class="col-sm">
                    <div class="card mt-5" style="width: 18rem;">
                        <img class="card-img-top" src="images/{{$trainer->avatar}}" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{$trainer->name}}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">Ver mas...</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

@endsection
