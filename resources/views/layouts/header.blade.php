<!-- Navbar -->
<nav class="navbar navbar-expand navbar-lightblue navbar-light">
    <a href="/home">
      <img src="Ite/dist/img/porto.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle elevation-3">
      <span class="brand-text font-weight-bolder text-light">Portofolio</span>
    </a>
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/home" class="nav-link text-light">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/about" class="nav-link text-light">About</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/education" class="nav-link text-light">Education</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/project" class="nav-link text-light">Project</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/akun">
          <img src="Ite/dist/img/akun.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
        </a>
      </li>
      @guest
      <li class="nav-item d-none d-sm-inline-block">
        <a class="btn btn-light" href="{{ route('login') }}">Login</a>
      </li>
      @endguest
      @auth
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/home" class="nav-link d-block text-light">{{ Auth::user()->name }}</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <a class="btn btn-light" href="{{ route('logout') }}">Logout</a>
      </li>
      @endauth
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
</nav>
  <!-- /.navbar -->