<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand pacifico" href="#">Sample Book Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/admin">Home</a>
            </li>
            <li class="nav-item">
                <a href="/admin/book" class="nav-link">Book</a>
            </li>
            <li class="nav-item">
                <a href="/admin/category" class="nav-link">Category</a>
            </li>
            <li class="nav-item">
                <a href="/admin/order" class="nav-link">Order</a>
            </li>
            @if(Auth::check())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="/logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item">Logout</a>
                        <form id="logout-form" action="/logout" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
            @else
                <li class="nav-item">
                    <a href="/login" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="/register" class="nav-link">Register</a>
                </li>
            @endif
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>