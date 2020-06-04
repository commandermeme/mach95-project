@extends('layouts.sidenav')

@section('sidenav')

<div class="container-fluid">
    <div class="row">
        @if(count($products) > 1)
            @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card-deck pt-4" id="product">
                        <div class="card">
                            <div class="card-body text-center" style="height: 250px">
                            <h5><a href="/productdetail/{{$product->id}}" > {{$product->product_name}} </a></h5>
                            </div>
                            <img class="card-img" src="img/glasses1.jpg" alt="Card image">
                            <p class="card-text text-center"> {{$product->description}} </p>
                            <div class="card-footer text-center mt-auto" style="border-top:0">     
                                <a href="/checkout"><button class="btn btn-sm" 
                                    style="color:white; background-color: #ff003c;">
                                    Buy</button>
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