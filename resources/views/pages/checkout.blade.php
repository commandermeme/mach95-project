@extends('layouts.topnav')

@section('topnav')

<div class="container">
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">

            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Cossette's cart</span>
                <i class="fa float-left" style="font-size:24px">&#xf07a;
                <span class='badge badge-warning' id='lblCartCount'> 3 </span></i>
              </h4>
              <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <h6 class="my-0">Product 1</h6>
                    <small class="text-muted">This is product 1.</small>
                  </div>
                  <span class="text-muted">₱100</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <h6 class="my-0">Product 2</h6>
                    <small class="text-muted">This is product 2.</small>
                  </div>
                  <span class="text-muted">₱100</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <h6 class="my-0">Product 3</h6>
                    <small class="text-muted">This is product 3.</small>
                  </div>
                  <span class="text-muted">₱100</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                  <span>Total : </span>
                  <strong>₱300</strong>
                </li>
              </ul>
        </div>
    </div>
</div>

@endsection