<style>
    .logo {
  width: 200px;
  height: 80px;
}
</style>
<header class="wrapper bg-light">
    <nav class="navbar navbar-expand-lg classic transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
                <a href="{{ url('/') }}">
                    <img class="logo" src="https://res.cloudinary.com/diptxmzhz/image/upload/v1685518528/Rawan%20Kecelakaan/image-removebg-preview_jnsqbl.png"/>
                </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <h3 class="text-white fs-30 mb-0">Sandbox</h3>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ '/pemetaan' }}">Pemetaan</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ '/author' }}">Author</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="dropdown-item" href="./services.html">Services
                                                I</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="./services2.html">Services
                                                II</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="dropdown-item" href="./pricing.html">Pricing</a>
                                </li>
                                <li class="nav-item"><a class="dropdown-item" href="./onepage.html">One Page</a>
                                </li>
                            </ul>
                        </li> -->
                        @guest
                            @if (Route::has('login'))
                                <div class="navbar-other ms-lg-4" style="padding-top: 15px;">
                                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                                        <li class="nav-item d-none d-md-block">
                                            <a href="{{ route('login') }}"
                                                class="btn btn-sm btn-primary rounded-pill">Login</a>
                                        </li>
                                        <li class="nav-item d-lg-none">
                                            <button class="hamburger offcanvas-nav-btn"><span></span></button>
                                        </li>
                                    </ul>
                                </div>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Hallo
                                    {{ Auth::user()->name }}</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{'/dashboard'}}">Dashboard
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                    <!-- /.navbar-nav -->
                    <!-- /.offcanvas-footer -->
                </div>
                <!-- /.offcanvas-body -->
            </div>
            <!-- /.navbar-collapse -->
            <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
</header>
<!-- /header -->
