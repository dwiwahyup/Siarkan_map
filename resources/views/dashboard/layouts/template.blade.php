<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('assets/dashboard/images/favicon.ico')}}">
    {{-- {{ url('')}} --}}
    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="{{ url('assets/dashboard/vendor/daterangepicker/daterangepicker.css')}}">

    <!-- Vector Map css -->
    <link rel="stylesheet" href="{{ url('assets/dashboard/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}">

    <!-- Theme Config Js -->
    <script src="{{ url('assets/dashboard/js/hyper-config.js')}}"></script>

    <!-- App css -->
    <link href="{{ url('assets/dashboard/css/app-saas.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ url('assets/dashboard/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Datatables css -->
    <link href="{{url('assets/dashboard/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/dashboard/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/dashboard/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/dashboard/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/dashboard/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/dashboard/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
</head>

<body class="show">
    <!-- Begin page -->
    <div class="wrapper">

        <!-- ========== Navbar Start ========== -->
        @include('dashboard/layouts.navbar')
        <!-- ========== Navbar End ========== -->

        <!-- ========== Sidebar Start ========== -->
        @include('dashboard/layouts.sidebar')
        <!-- ========== Sidebar End ========== -->




        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Start Content-->
                <div class="container-fluid">

                    @yield('content')

                </div>
                <!-- container -->
            </div>
            <!-- content -->
            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Hyper - Coderthemes.com
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <!-- Vendor js -->
    <script src="{{ url('assets/dashboard/js/vendor.min.js')}}"></script>

    <!-- Daterangepicker js -->
    <script src="{{ url('assets/dashboard/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{ url('assets/dashboard/vendor/daterangepicker/daterangepicker.js')}}"></script>

    <!-- Apex Charts js -->
    <script src="{{ url('assets/dashboard/vendor/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Vector Map js -->
    <script src="{{ url('assets/dashboard/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}">
    </script>
    <script src="{{ url('assets/dashboard/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js')}}">
    </script>

    <!-- Dashboard App js -->
    <script src="{{ url('assets/dashboard/js/pages/demo.dashboard.js')}}"></script>

    <!-- App js -->
    <script src="{{ url('assets/dashboard/js/app.min.js')}}"></script>

    <!-- ============================================================== -->

    <!-- Datatables js -->
    <script src="{{url('assets/dashboard/vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('assets/dashboard/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{url('assets/dashboard/vendor/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{url('assets/dashboard/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}">
    </script>
    <script src="{{url('assets/dashboard/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js')}}">
    </script>
    <script src="{{url('assets/dashboard/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}">
    </script>
    <script src="{{url('assets/dashboard/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('assets/dashboard/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>
    <script src="{{url('assets/dashboard/vendor/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{url('assets/dashboard/vendor/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{url('assets/dashboard/vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{url('assets/dashboard/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{url('assets/dashboard/vendor/datatables.net-select/js/dataTables.select.min.js')}}"></script>

    <!-- Datatable Demo Aapp js -->
    <script src="{{url('assets/dashboard/js/pages/demo.datatable-init.js')}}"></script>


    <!-- Apex Chart js -->
    <script src="{{url('assets/dashboard/vendor/apexcharts/apexcharts.min.js')}} "></script>

    <!-- Apex Chart line Demo js -->
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
    <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
    <script src="{{url('assets/dashboard/js/pages/demo.apex-line.js')}}"></script>


</body>

</html>