  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      
      <div class="logo me-auto" style="display: flex; align-items: center;">
          <img src="assets/img/tayyiban-logo.png" class="img-fluid" alt="Sample image" style="margin-right: 10px;">
          <h1 style="margin: 0;"><a href="index.html">Thayyiban Store</a></h1>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
            <li><a class="nav-link scrollto {{ request()->is('/dashboard') ? 'active' : '' }}" href="{{ url('/dashboard') }}">Home</a></li>
                <li><a class="nav-link scrollto {{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
                <li><a class="nav-link scrollto {{ request()->is('info') ? 'active' : '' }}" href="{{ route('info') }}">Info</a></li>
                <li><a class="nav-link scrollto {{ request()->is('produk') ? 'active' : '' }}" href="{{ route('produk') }}">Produk </a></li>
                <li><a class="nav-link scrollto {{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
     
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

       <div class="logout-button ms-3">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
          @csrf
          <button type="submit" class="btn btn-primary">Logout</button>
        </form>
      </div>

    </div>
  </header><!-- End Header -->