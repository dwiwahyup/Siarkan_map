<!-- ========== Topbar Start ========== -->
<div class="navbar-custom">
    <div class="topbar container-fluid">
        <div class="d-flex align-items-center gap-lg-2 gap-1">

            <!-- Topbar Brand Logo -->
            <div class="logo-topbar">
                <!-- Logo light -->
                <a href="index.html" class="logo-light">
                    <span class="logo-lg">
                        <img src="https://res.cloudinary.com/diptxmzhz/image/upload/v1685520080/Rawan%20Kecelakaan/image-removebg-preview_1_sqi7he.png" alt="logo">
                    </span>
                    <span class="logo-sm">
                        <img src="https://res.cloudinary.com/diptxmzhz/image/upload/v1685520080/Rawan%20Kecelakaan/image-removebg-preview_1_sqi7he.png" alt="small logo">
                    </span>
                </a>

                <!-- Logo Dark -->
                <a href="index.html" class="logo-dark">
                    <span class="logo-lg">
                        <img src="https://res.cloudinary.com/diptxmzhz/image/upload/v1685520080/Rawan%20Kecelakaan/image-removebg-preview_1_sqi7he.png" alt="dark logo">
                    </span>
                    <span class="logo-sm">
                        <img src="https://res.cloudinary.com/diptxmzhz/image/upload/v1685520080/Rawan%20Kecelakaan/image-removebg-preview_1_sqi7he.png" alt="small logo">
                    </span>
                </a>
            </div>

            <!-- Sidebar Menu Toggle Button -->
            <button class="button-toggle-menu">
                <i class="mdi mdi-menu"></i>
            </button>

            <!-- Horizontal Menu Toggle Button -->
            <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <div class="lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
        </div>

        <ul class="topbar-menu d-flex align-items-center gap-3">

            <li class="d-none d-sm-inline-block">
                <div class="nav-link" id="light-dark-mode" data-bs-toggle="tooltip" data-bs-placement="left"
                    title="Theme Mode">
                    <i class="ri-moon-line font-22"></i>
                </div>
            </li>


            <li class="d-none d-md-inline-block">
                <a class="nav-link" href="" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line font-22"></i>
                </a>
            </li>
            <li class="d-none d-md-inline-block">
                <a href="{{ url('/') }}" class="nav-link">
                    <i class="ri-home-4-line font-22"></i>
                </a>                
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle arrow-none nav-user px-2" data-bs-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    <span class="d-lg-flex flex-column gap-1 d-none">
                        <h5 class="my-0">Hallo, {{ Auth::user()->name }}</h5>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                    <!-- item-->
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome {{ Auth::user()->name }} !</h6>
                    </div>

                    <!-- item
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="mdi mdi-account-circle me-1"></i>
                        <span>My Account</span>
                    </a> -->

                    <!-- item-->
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            <i class="mdi mdi-logout me-1"></i>
                            <span>
                                @csrf
                                Logout
                            </span>
                        </form>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- ========== Topbar End ========== -->
