@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4 text-dark">
                <i class="fa fa-dropbox"></i>
                <a class="text-decoration-none" href="{{ route('products.index') }}">Products</a>/Details
            </h2>
            <div class="row">
                <div class="col-md-7">
                    <img class="img-fluid rounded" src="/storage/prod_images/{{ $product->prod_image }}" alt="no image">
                </div>
                <div class="col-md-5">
                    <p class="lead"><span class=" badge badge-primary">{{ $product->type }}</span></p>
                    <h1 class=""><strong>{{ $product->brand_name }}</strong></h1>
                    <h3>Model: {{ $product->model }}</h3>
                    <h4 class="float-right">Stock(s): <span class="badge badge-primary">{{ $product->stock }}</span></h4>
                    <h4><em><strong>Php {{ $product->price }}</strong></em></h4>
                    <p class="lead mt-4"><span class="badge badge-primary">Description:</span> {{ $product->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection