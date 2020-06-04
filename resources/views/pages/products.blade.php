@extends('layouts.sidenav')

@section('sidenav')

<div class="container-fluid">
    <div class="row">
        @if(count($products) > 1)
            @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card-deck pt-4" id="product">
                        <div class="card">
                            <div class="card-body text-center">
                            <h5> {{$product->product_name}} </h5>
                            </div>
                            <img class="card-img" src="img/glasses1.jpg" alt="Card image">
                            <p class="card-text text-center"> {{$product->description}} </p>
                            {{-- <p> {{$product->price}}</p> --}}
                            <div class="card-footer text-center mt-auto" style="border-top:0">     
                                <button class="btn btn-sm" style="color:white">Buy</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <h1>Sorry, out of stock. Please come back tomorrow.</h1>
        @endif
    </div>
</div>

@endsection