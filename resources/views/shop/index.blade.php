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
                        {{-- <div class="col-md-4 "> --}}
                            <div class="card-deck col-md-4 mb-4">
                                <div class="card">
                                    <img class="card-img-top" src="storage/prod_images/{{ $product->prod_image }}" alt="no image">
                                    <div class="card-body">
                                        <h3 class="card-title">{{ $product->brand_name }}</h3>
                                        <p class="lead float-right">Php{{ number_format($product->price, 2) }}</p>
                                        <p class="lead">Model: {{ $product->model }}<p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{ route('checkout.index') }}" class="btn btn-lg btn-primary">Buy</a>
                                    </div>
                                </div>
                            </div>
                        {{-- </div> --}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
@endsection