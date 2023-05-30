<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Log In | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('assets/dashboard/images/favicon.ico')}}">
        
        <!-- Theme Config Js -->
        <script src="{{url('assets/dashboard/js/hyper-config.js')}}"></script>

        <!-- App css -->
        <link href="{{url('assets/dashboard/css/app-saas.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="{{url('assets/dashboard/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    </head>
    
    <body class="authentication-bg">
        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        
                        @yield('content')
                        
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            2018 - <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
        </footer>
        <!-- Vendor js -->
        <script src="{{url('assets/dashboard/js/vendor.min.js')}}"></script>
        
        <!-- App js -->
        <script src="{{url('assets/dashboard/js/app.min.js')}}"></script>

    </body>
</html>
