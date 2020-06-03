@extends('layouts.topnav')

@section('topnav')

<div class="container">
    <div class="row">
        <div class="col-md-4 pt-5">
            <div class="card" id="item">
                <img class="card-img-top" src="img/glasses1.jpg" alt="Card image">
                <div class="card-footer text-center mt-auto" style="border-top:0">     
                    <button class="btn btn-primary btn-sm float-left" id="left" style="color:white">Button1 </button>
                    <button class="btn btn-success btn-sm float-right" id="left" style="color:white">Button2 </button>                                          
                </div> 
            </div>
        </div>
        <div class="col-m-8 mx-auto pt-5">
            <h1>Product 1</h1>
            <p class="lead">This is Product 1.<br>Price : 1,000 </p>
        </div>
    </div>
</div>
    
@endsection