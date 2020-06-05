@extends('layouts.default_app')

@include('includes.default_header')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 mt-4">
                @include('includes.default_sidebar')
            </div>
            <div class="col-md-9 mt-4">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-4 mb-4">
                            <div class="card-deck" id="product" style="height: 350px">
                                <div class="card">
                                    <div class="card-body text-center">
                                    <h5><a href="">{{ $product->brand_name }}</a></h5>
                                    </div>
                                    <img class="card-img" src="storage/prod_images/{{ $product->prod_image }}" alt="Card image">
                                    <p class="card-text text-center">{{ $product->description }}.</p>
                                    <div class="card-footer text-center mt-auto" style="border-top:0">     
                                        <a href="#"><button class="btn btn-sm" 
                                            style="color:white; background-color: #ff003c;">
                                            Buy</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
@endsection