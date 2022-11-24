<!-- Navbar -->
<nav class="navbar navbar-expand navbar-lightblue navbar-light">
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      @guest
        <img src="{{ asset('Ite/dist/img/porto.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle elevation-3" style="margin-left:1.5rem;">
        <a href="/home">
          <span class="brand-text font-weight-bolder text-light">Portofolio</span>
        </a>
        <a class="btn btn-light" style="margin:1rem; color: #111; padding-left:0" href="{{ route('login') }}">Login</a>
      @endguest
      @auth
        <a href="/akun">
          <img src="{{ asset('Ite/dist/img/avatarProfile.png')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle elevation-3">
          <span class="brand-text font-weight-bolder text-light">{{ Auth::user()->name }}</span>
        </a>
        <a href="/home">Home</a>
        <a href="/about">About</a>
        <a href="/education">Education</a>
        <a href="/project">Project</a>
        <a href="{{ url('/gallery') }}" class="nav-link text-light">Gallery</a>
        <a href="{{ url('/gallery2') }}" class="nav-link text-light">Gallery API</a>
        <a class="btn btn-light" style="margin:1rem; color: #111; padding-left:0" href="/send-email">Send Email</a>
        <a class="btn btn-light" style="margin:1rem; color: #111; padding-left:0" href="{{ route('logout') }}">Logout</a>
      @endauth
    </div>
    <span style="font-size:30px; cursor:pointer; margin-left:1rem;" onclick="openNav()">&#9776;</span>
    @auth
    <img src="{{ asset('Ite/dist/img/porto.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle elevation-3" style="margin-left:1.5rem;">
    <a href="/home">
      <span class="brand-text font-weight-bolder text-light">Portofolio</span>
    </a>
    @endauth
    <!-- Left navbar links -->
    @guest
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block" style="padding-left:10rem;">
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
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/gallery') }}" class="nav-link text-light">Gallery</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/gallery2') }}" class="nav-link text-light">Gallery API</a>
      </li>
    </ul>
    @endguest

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      @guest
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/akun">
          <img src="{{ asset('Ite/dist/img/akun.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle elevation-3">
        </a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="btn btn-light" href="{{ route('login') }}">Login</a>
      </li>
      @endguest
      @auth
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/akun" class="nav-link d-block text-light"><b>{{ Auth::user()->name }}</b></a>
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