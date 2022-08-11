@extends('layouts.app-master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{ $product->gallery }}" alt="">
            </div>
            <div class="col-sm-6">
                <a href="/">Go Back</a>
                <h2>Name : {{ $product->name }}</h2>
                <h3>Price : {{ $product->price }}</h3>
                <h4>Details : {{ $product->details }}</h4>
                <h4>Category : {{ $product->description }}</h4>

                <form action="{{ route('cart.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <button class="btn btn-primary" name="function" value='cart'>Add to Cart</button>
                    <button class="btn btn-success" name="function" value="buynow">Buy Now</button>
                </form>

            </div>
        </div>
    </div>
@endsection
