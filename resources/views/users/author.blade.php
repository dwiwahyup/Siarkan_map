@extends('users/layouts.template')

@section('content')

<section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
        <div class="row">
            <div class="col-md-10 col-xl-8 mx-auto">
                <div class="post-header">
                    <h1 class="display-1 mb-5">Author Profile</h1>
                    <p>Berikut merupakan profile author dari SIARKAN (Sistem Informasi Pemetaan Daerah Rawan Kecelakaan)</p>
                    <!-- <ul class="post-meta fs-17 mb-5">
                        <li><i class="uil uil-clock"></i> Full time</li>
                        <li><i class="uil uil-location-arrow"></i> Manchester, UK</li>
                        <li><i class="uil uil-building"></i> Design Department</li>
                    </ul> -->
                    <!-- /.post-meta -->
                </div>
                <!-- /.post-header -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="blog single mt-n17">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <div class="container pb-14 pb-md-16">
                                <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
                                    <div class="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative">
                                        <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.4rem;"></div>
                                        <figure class="rounded"><img src="{{url('assets/users/img/photos/about4.jpg')}}" srcset="./assets/img/photos/about4@2x.jpg 2x" alt=""></figure>
                                    </div>

                                    <div class="col-lg-6">
                                        <!-- <img src="{{url('assets/users/img/icons/lineal/telemarketer.svg')}}" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                                        <h2 class="display-4 mb-8">Convinced yet? Let's make something great together.</h2> -->
                                        <div class="d-flex flex-row">
                                            <div>
                                                <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                                            </div>
                                            <div>
                                                <h5 class="mb-1">Nama</h5>
                                                <p>Dwi Wahyu Prambodo</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <div>
                                                <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                                            </div>
                                            <div>
                                                <h5 class="mb-1">Tempat, tanggal lahir</h5>
                                                <p>26 Desember 2000</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <div>
                                                <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
                                            </div>
                                            <div>
                                                <h5 class="mb-1">Jurusan/Prodi</h5>
                                                <p>Teknologi Informasi/ Teknik Informatika</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <div>
                                                <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
                                            </div>
                                            <div>
                                                <h5 class="mb-1">Instansi</h5>
                                                <p>Politeknik Negeri Jember</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <div>
                                                <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
                                            </div>
                                            <div>
                                                <h5 class="mb-1">Email</h5>
                                                <p>dwiwahyu1235@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <div>
                                                <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
                                            </div>
                                            <div>
                                                <h5 class="mb-1">Personal Website</h5>
                                                <p>Dwi Wahyu Prambodo</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.blog -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->

@endsection