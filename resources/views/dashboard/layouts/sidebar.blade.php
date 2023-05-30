<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="index.html" class="logo logo-light">
        <span class="logo-lg">
            <img src="{{ url('assets/dashboard/images/logo.png')}}" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="{{ url('assets/dashboard/images/logo-sm.png')}}" alt="small logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="index.html" class="logo logo-dark">
        <span class="logo-lg">
            <img src="{{ url('assets/dashboard/images/logo-dark.png')}}" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="{{ url('assets/dashboard/images/logo-dark-sm.png')}}" alt="small logo">
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </div>

    <!-- Full Sidebar Menu Close Button -->
    <div class="button-close-fullsidebar">
        <i class="ri-close-fill align-middle"></i>
    </div>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title">Navigation</li>

            <li class="side-nav-item">
                <a href="{{'/dashboard'}}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboards </span>
                </a>


            <li class="side-nav-item">
                <a href="{{'/dashboard/jalan'}}" class="side-nav-link">
                    <i class="uil-traffic-barrier"></i>
                    <span> Data Jalan </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{'/dashboard/kecelakaan'}}" class="side-nav-link">
                    <i class="uil-comments-alt"></i>
                    <span> Data Kecelakaan </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{'/dashboard/daerahrawan'}}" class="side-nav-link">
                    <i class="uil-comments-alt"></i>
                    <span> Cek Kerawanan</span>
                </a>
            </li>
            <!-- <li class="side-nav-item">
                <a href="{{'/aruslantas'}}" class="side-nav-link">
                    <i class="uil-comments-alt"></i>
                    <span> Data Arus Lalu Lintas </span>
                </a>
            </li> -->

        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
<!-- ========== Left Sidebar End ========== -->