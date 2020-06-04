@extends('layouts.topnav')

@section('topnav')

<div class="container">
    <div class="row">
        {{-- <div class="col-md-4 pt-5">
            <div class="card" id="item">
                <img class="card-img" src="img/glasses1.jpg" alt="Card image">
                <div class="card-footer text-center mt-auto" style="border-top:0">     
                    <button class="btn btn-sm">Return</button>
                    <button class="btn btn-sm">Buy</button>
                </div> 
            </div>
        </div> --}}
        <div class="col-m-8 mx-auto pt-5">
            <h1> {{$product->product_name}}</h1>
            <p class="lead"> {{$product->description}} <br> {{$product->price}} </p>
            <a href="/products"><button class="btn btn-md btn-primary" style="width: 70px">Return</button></a>
            <a href="/checkout"><button class="btn btn-md" id="detailbtn" style="background-color: #ff003c; color:white; width: 70px">Buy</button></a>
        </div>
    </div>
</div>
    
@endsection