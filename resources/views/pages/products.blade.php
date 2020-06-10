@extends('layouts.sidenav')

@section('sidenav')

<div class="container-fluid">
    <div class="row">
        @if(count($products) >= 1)
            @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card-deck pt-4" id="product" style="height: 350px">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 id="productname"><a href="/productdetail/{{$product->id}}" > {{$product->product_name}} </a></strong></h5>
                            </div>
                            <img class="card-img" src="/img/{{$product->image}}" alt="Card image">
                            <p class="card-text text-center"> {{$product->description}} </p>
                            <div class="card-footer text-center mt-auto" style="border-top:0">     
                                <a href="/checkout/{{$product->id}}"><button class="btn btn-sm" 
                                    style="color:white; background-color: #ff003c; width:200px; height:35px;">
                                    Add to cart</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <h1>Sorry, out of stock. Please come back tomorrow.</h1>
        @endif
    </div>
    @yield('products')
</div>

@endsection