<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cart.index') }}">
                    <i class="fas fa-shopping-cart"></i> Shopping Cart
                    <span class="badge bg-secondary">{{ Session::has('cart') ? Session::get('cart')->quantity : '' }}</span>
                </a>
            </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user"></i>
              User
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                @if(!Auth::check())
                    <li><a class="dropdown-item" href="{{ route('register') }}">Sign Up</a></li>
                    <li><a class="dropdown-item" href="{{ route('login') }}">Sign In</a></li>
                @else
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                @endif
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
