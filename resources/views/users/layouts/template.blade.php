<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords"
        content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>SIARKAN (Sitem Informasi Pemetaan Daerah Rawan Kecelakaan)</title>
    <link rel="shortcut icon" href="https://res.cloudinary.com/diptxmzhz/image/upload/v1685521185/Rawan%20Kecelakaan/image-removebg-preview_2_wwoot2.png">
    <link rel="stylesheet" href="{{ url('assets/users/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ url('assets/users/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/users/css/colors/sky.css') }}">
    <link rel="preload" href="{{ url('assets/users/css/fonts/urbanist.css') }}" as="style"
        onload="this.rel='stylesheet'">


    <!-- Datatables css -->
    <link href="{{ url('assets/dashboard/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/dashboard/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ url('assets/dashboard/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/dashboard/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/dashboard/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/dashboard/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />

    <!-- Leafleat -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</head>

<body>
    <div class="content-wrapper">
        @include('users/layouts.navbar')
    </div>

    @yield('content')

    @include('users.layouts.footer')

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="{{ url('assets/users/js/plugins.js') }}"></script>
    <script src="{{ url('assets/users/js/theme.js') }}"></script>
    
    @stack('js')


</body>

</html>
