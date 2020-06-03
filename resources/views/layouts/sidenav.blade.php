@extends('layouts.topnav')

@section('topnav')

<main role="main" class="container-fluid bg">
    <div class="row">
      <div class="col-md-3 pt-4">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center">Menu</h4>
            </div>
            <div class="card-body">
                <div class="list-group">
                    <div class="dropdown">
                        <a class="btn dropdown-toggle  list-group-item" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Products
                        </a>
                        
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="">Category 1</a>
                            <a class="dropdown-item" href="">Category 2</a>
                            <a class="dropdown-item" href="">Category 3</a>
                        </div>
                    </div>                  
                </div>
            </div>
        </div>
      </div>
      <div class="col-md-9">
        @yield('sidenav')
      </div>
    </div>
</main>
@endsection
