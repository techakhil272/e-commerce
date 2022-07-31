@extends('layouts.app-master')

@section('content')
    @include('layouts.partials.carousel')
    <div class="bg-light p-5 rounded">
        @auth
            <h1>Dashboard</h1>
            <p class="lead">Only authenticated users can access this section.</p>
            <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a>
        @endauth

        @guest
            <h1>Homepage</h1>
            <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
    {{-- <div class="card">
        <h2 class="my-2">Join the Electronic fun</h2>
        <div class="cards trending-wrapper">
            @foreach ($products as $item)
                <div class="card-item">
                    <img src="{{ $item->gallery }}" class="trending-image" alt="" width="200px">
                    <div class="lines">
                        <p class="text-center my-1">Cricket Bats</p>
                        <p class="text-center my-1">Min 20% off</p>
                        <p class="text-center my-1">Grab Now!</p>
                    </div>
                </div>
                <div class="card-item">
                    <img src="{{ $item->gallery }}" class="trending-image" alt="" width="200px">
                    <div class="lines">
                        <p class="text-center my-1">{{ $item->discount }}</p>
                        <p class="text-center my-1">Min {{ $item->discount }}% off</p>
                        <p class="text-center my-1">Grab Now!</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="card">
        <div class="trending-wrapper">
            <h3>Tredning Products</h3>
            @foreach ($products as $item)
                <div class="trening-item">
                    <a href="detail/{{ $item['id'] }}">
                        <img class="trending-image" src="{{ $item['gallery'] }}">
                        <div class="">
                            <h4 class="text-center my-1">{{ $item->name }}</h4>
                            <h4 class="text-center my-1">Min {{ $item->discount }}% off</h4>
                            <h4 class="text-center my-1">Grab Now!</h4>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div> --}}
    <div class="card">
        <div class="card-group">
            @foreach ($products as $item)
                <div class="card">
                    <a href="#"><img class="card-img-top" src="{{ $item->gallery }}" alt="Card image cap"
                            height="250vh" width="250vw">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text" style="color: black">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </a>


                </div>
            @endforeach
            <div class="card">
                <img  class="card-img-top" src="{{ $products[1]->gallery }}" alt="Card image cap" height="250vh"
                    width="250vw">
                <div class="card-body">
                    <h5 class="card-title">{{ $products[1]->name }}</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                        content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
@endsection
