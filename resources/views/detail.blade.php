@extends('master')
@section('content')
    <div class="container p-5 mb-5">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{ $product['gallery'] }}" alt="">
            </div>
            <div class="col-sm-6">
                <h2>{{ $product->name }}</h2>
                <h3>Price: {{ $product->price }}</h3>
                <h6>Detail: {{ $product->description }}</h6>
                <h6>Category: {{ $product->category }}</h6>
                 <br><br>
                 <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}"/>
                     <button class="btn btn-primary">Add to Cart</button>
                 </form>
                 <br>
                <button class="btn btn-success">Buy Now</button>
                <a href="/" class="float-right">Go back</a>
            </div>
        </div>
    </div>
@endsection
