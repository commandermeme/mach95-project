@extends('layouts.topnav')

@section('topnav')
<body>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Products
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Category 1</a>
        <a class="dropdown-item" href="#">Category 2</a>
        <a class="dropdown-item" href="#">Category 3</a>
        </div>
    </div>
    @yield('sidenav')
</body>
@endsection
