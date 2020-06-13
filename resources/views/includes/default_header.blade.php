<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="{{ route('home') }}" class="navbar-brand">MyShop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item active">
                <a href="{{ route('about') }}" class="nav-link">About</a>
            </li>
            <li class="nav-item active">
                <a href="{{ route('contact') }}" class="nav-link">Contact</a>
            </li>
        </ul>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" label="Search">
            <button class="btn my-2 my-sm-0" type="submit"></button>
        </form>
    </div>
</nav>