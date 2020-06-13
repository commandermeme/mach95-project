@extends('layouts.default_app')

@include('includes.default_header')

@section('content')
    <div class="jumbotron">
        <div class="container-fluid text-center">
            <p class="display-3">My Shop</p>
            <p class="strong pb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat quam rem, rerum commodi dolore ipsam. Consequatur laudantium doloribus nemo sed reiciendis suscipit a quaerat similique, assumenda accusamus dignissimos saepe quae?</p>
            <a href="{{ route('shop.index') }}" class="btn btn-lg btn-primary">Shop now!</a>
        </div>
    </div>
@endsection