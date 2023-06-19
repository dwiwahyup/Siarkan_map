@extends('users/layouts.template')

@section('content')
<section class="wrapper bg-light">
    <div class="container pt-10 pt-md-14 pb-14 pb-md-16 text-center">
        <div class="row gx-lg-8 gx-xl-12 gy-10 gy-xl-0 mb-14 align-items-center">
            <div class="col-lg-6 order-lg-2">
                <figure><img class="img-auto" style="width: 500px;" src="https://res.cloudinary.com/diptxmzhz/image/upload/v1681588178/Rawan%20Kecelakaan/35043_pqgm7h.jpg" alt="" /></figure>
            </div>
            <!-- /column -->
            <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 text-center text-lg-start">
                <h1 class="display-1 fs-54 mb-5 mx-md-n5 mx-lg-0 mt-7">
                    Sayangi nyawa anda! <br> Berkendaralah dengan <br class="d-md-none"></h1>
                <h1 class="fs-54 mx-lg-0" style="margin-top: -20px;"><span class="rotator-fade text-primary" style="text-align: justify;"> Bijak, Aman, Tertib</span></h1>
                <p class="lead fs-lg mb-7" style="text-align: justify;">Website ini berisi himbauan tentang tata cara
                    berkendara kendarang dengan baik. Serta menyediakan fitur pemetaan daerah rawan kecelakaan di
                    Kabupaten Tuban.</p>
                <span><a href="{{ '/pemetaan' }}" class="btn btn-lg btn-primary rounded-pill me-2">Cek
                        Pemetaan</a></span>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <hr>
        <h4 class="text-center" style="margin-top: 30px;">Data Kecelakaan Kabupaten Tuban</h4><br>
        <h3 class="text-center" style="margin-top: -30px;">2019</h3>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-8 mt-lg-2">
                <div class="row align-items-center counter-wrapper gy-6 text-center">
                    <div class="col-md-4">
                        <div class="icon btn btn-circle btn-lg btn-soft-primary pe-none mb-4"> <i class="uil uil-user-check"></i> </div>
                        <h3 class="counter">79</h3>
                        <p>Meninggal Dunia</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-4">
                        <div class="icon btn btn-circle btn-lg btn-soft-primary pe-none mb-4"> <i class="uil uil-user-check"></i> </div>
                        <h3 class="counter">15</h3>
                        <p>Luka Berat</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-4">
                        <div class="icon btn btn-circle btn-lg btn-soft-primary pe-none mb-4"> <i class="uil uil-user-check"></i> </div>
                        <h3 class="counter">505</h3>
                        <p>Luka Ringan</p>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
        </div>
    </div>
    <!-- /.container -->
    <div class="overflow-hidden">
        <div class="divider text-soft-primary mx-n2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
                <path fill="currentColor" d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z" />
            </svg>
        </div>
    </div>
    <!-- /.overflow-hidden -->
</section>
<!-- /section -->
<section class="wrapper bg-gradient-primary">
    <div class="container pt-12 pt-lg-8 pb-14 pb-md-17">
        <div class="row text-center">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <!-- <h2 class="fs-16 text-uppercase text-primary mb-3">What We Do?</h2> -->
                <h3 class="display-3 mb-10 px-xxl-10">Penyebab Terjadinya Kecelakaan</h3>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-11 px-xxl-5 text-center d-flex align-items-end">
            <div class="col-lg-3">
                <div class="px-md-15 px-lg-3">
                    <figure class="mb-6"><img style="width: 70%;" class="img-fluid" src="https://res.cloudinary.com/diptxmzhz/image/upload/v1681599273/Rawan%20Kecelakaan/Decision_fatigue-pana_1_nnfiwj.svg" srcset="{{ url('assets/users/img/illustrations/i24@2x.png 2x') }}" alt="" />
                    </figure>
                    <h3>Faktor Manusia</h3>
                    <p class="mb-2">Faktor pengemudi yang mengantuk, tidak fokus, atau kelelahan, menyetir di bawah
                        pengaruh obat-obatan terlarang, alkohol, atau menyetir sambil melihat handphone atau tablet.</p>
                </div>
                <!--/.px -->
            </div>
            <!--/column -->
            <div class="col-lg-3">
                <div class="px-md-15 px-lg-3">
                    <figure class="mb-6"><img class="img-fluid" src="https://res.cloudinary.com/diptxmzhz/image/upload/v1681599434/Rawan%20Kecelakaan/Car_accesories-pana_1_vdv6lj.svg" srcset="{{ url('assets/users/img/illustrations/i19@2x.png 2x') }}" alt="" />
                    </figure>
                    <h3>Faktor Kendaraan</h3>
                    <p class="mb-2">faktor kendaraan seperti kondisi mesin, rem, lampu, ban, dan muatan bisa menjadi
                        penyebab kecelakaan, demikian halnya faktor cuaca berupa kondisi hujan, kabut, atau asap.</p>
                </div>
                <!--/.px -->
            </div>
            <!--/column -->
            <div class="col-lg-3">
                <div class="px-md-15 px-lg-3">
                    <figure class="mb-6"><img style="width: 70%;" class="img-fluid" src="https://res.cloudinary.com/diptxmzhz/image/upload/v1681599968/Rawan%20Kecelakaan/Winter_road-cuate_pp73so.svg" srcset="{{ url('assets/users/img/illustrations/i18@2x.png 2x') }}" alt="" />
                    </figure>
                    <h3>Faktor Jalan</h3>
                    <p class="mb-2">Faktor jalan yang diantaranya berupa desain jalan seperti median, gradien,
                        alinyemen, dan jenis permukaan, ataupun kontrol lalu lintas seperti marka, rambu, dan lampu lalu
                        lintas.</p>
                </div>
                <!--/.px -->
            </div>
            <div class="col-lg-3">
                <div class="px-md-15 px-lg-3">
                    <figure class="mb-6"><img class="img-fluid" src="https://res.cloudinary.com/diptxmzhz/image/upload/v1681600192/Rawan%20Kecelakaan/Flood-bro_d0zdt6.svg" srcset="{{ url('assets/users/img/illustrations/i18@2x.png 2x') }}" alt="" />
                    </figure>
                    <h3>Faktor Lingkungan</h3>
                    <p class="mb-2">Faktor cuaca juga sangat berpengaruh. Seperti contoh sada saat kondisi hujanm
                        kondisi permukaan jalan bisa menjadi sangat licin. oleh karena itu pengemudi di harapkan
                        berati-hati.</p>
                </div>
                <!--/.px -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->

<!-- /section -->
<section class="wrapper bg-gradient-reverse-primary">
    <div class="container pb-14 pb-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-7">
                <figure>
                    <iframe width="660" height="415" src="https://www.youtube.com/embed/2jxRk5nJSgg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </figure>
            </div>
            <!--/column -->
            <div class="col-lg-5">
                <h3 class="display-3 mb-7">Tips berkendara dengan aman</h3>
                <div class="accordion accordion-wrapper" id="accordionExample">
                    <div class="card plain accordion-item">
                        <div class="card-header" id="headingOne">
                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Persiapan sebelum berkendara. </button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>Cek kondisi kendaraan anda, pastikan kondisi kendaraan anda layak dan sehat</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
                    <div class="card plain accordion-item">
                        <div class="card-header" id="headingTwo">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Fokus saaat berkendara</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>Fokus menjadi kunci utama bagi pengemudi untuk tetap aman selama di perjalanan.</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
                    <div class="card plain accordion-item">
                        <div class="card-header" id="headingThree">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Taati rambu lalu lintas
                            </button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>Berkendaralah dengan menaati rambu - rambu yang ada di sepanjang jalan.</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
                </div>
                <!--/.accordion -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
    <div class="overflow-hidden">
        <div class="divider text-light mx-n2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
                <path fill="currentColor" d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z" />
            </svg>
        </div>
    </div>
    <!-- /.overflow-hidden -->
</section>
<!-- /section -->


<section class="wrapper bg-light">
    <div class="container pt-6 pb-14 pb-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10">
            <div class="col-lg-6 mb-0" style="align-self:center;">
                <h2 class="fs-16 text-uppercase text-primary mb-4">FAQ</h2>
                <h3 class="display-3 mb-4">Frequently Asked Questions</h3>
                <p class="mb-6">FAQ section pada sistem informasi ini menyediakan informasi penting dan jawaban atas
                    pertanyaan umum seputar sistem informasi ini. Anda bisa menemukukan infromasi mengenai website
                    SIARKAN (Sistem Informasi Pemetaan Daerah Rawan Kecelakaan) Kabupaten Tuban</p>
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <div id="accordion-3" class="accordion-wrapper">
                    <div class="card accordion-item shadow-lg">
                        <div class="card-header" id="accordion-heading-3-1">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-1" aria-expanded="false" aria-controls="accordion-collapse-3-1">Apa itu
                                <strong>
                                    <span class="text-primary">SIARKAN Kabupaten Tuban?</span>
                                </strong>
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <div id="accordion-collapse-3-1" class="collapse" aria-labelledby="accordion-heading-3-1" data-bs-target="#accordion-3">
                            <div class="card-body">
                                <p>SIARKAN adalah sebuah aplikasi berbasis web yang dibuat untuk memudahkan masyarakat
                                    dalam melihat pemetaan daerah rawan kecelakaan yang ada di Kabupaten Tuban.
                                </p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.collapse -->
                    </div>
                    <!-- /.card -->
                    <div class="card accordion-item shadow-lg">
                        <div class="card-header" id="accordion-heading-3-2">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-2" aria-expanded="false" aria-controls="accordion-collapse-3-2">Data yang di gunakan dalam penelitian
                                ini?</button>
                        </div>
                        <!-- /.card-header -->
                        <div id="accordion-collapse-3-2" class="collapse" aria-labelledby="accordion-heading-3-2" data-bs-target="#accordion-3">
                            <div class="card-body">
                                <p>Data yang di gunakan dalam penelitian ini adalah data dari kecelakaan yang terjadi di
                                    Kabupaten Tuban pada tahun 2018-2019.
                                </p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.collapse -->
                    </div>
                    <!-- /.card -->
                    <div class="card accordion-item shadow-lg">
                        <div class="card-header" id="accordion-heading-3-3">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-3" aria-expanded="false" aria-controls="accordion-collapse-3-3">Sumber data yang digunakan pada penelitian
                                ini?</button>
                        </div>
                        <!-- /.card-header -->
                        <div id="accordion-collapse-3-3" class="collapse" aria-labelledby="accordion-heading-3-3" data-bs-target="#accordion-3">
                            <div class="card-body">
                                <p>Data yang di gunakan pada penelitian ini bersumber dari Polres Tuban (data
                                    kecelakaan) dan dari Dinas Perhubungan Kabupaten Tuban (data jalan).
                                </p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.collapse -->
                    </div>
                    <!-- /.card -->
                    <div class="card accordion-item shadow-lg">
                        <div class="card-header" id="accordion-heading-3-4">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-4" aria-expanded="false" aria-controls="accordion-collapse-3-4">Bagaimana jika ingin mengetahui hasil
                                pemetaan?</button>
                        </div>
                        <!-- /.card-header -->
                        <div id="accordion-collapse-3-4" class="collapse" aria-labelledby="accordion-heading-3-4" data-bs-target="#accordion-3">
                            <div class="card-body">
                                <p>Untuk mengetahui hasil pemetaan, anda bisa klik pada menu "Pemetaan" dan anda akan di
                                    arahkan ke halaman pemetaan.Anda juga bisa menggunakan Tombol ini <a href="" type="sumbit">Pemetaan</a>
                                </p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.collapse -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.accordion-wrapper -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
    <!-- <div class="overflow-hidden">
            <div class="divider text-navy mx-n2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
                    <path fill="currentColor" d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z" />
                </svg>
            </div>
        </div> -->
    <!-- /.overflow-hidden -->
    <div style="margin-top: 20px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253467.04740821905!2d111.73122006617668!3d-6.9593713900865515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e779e5bae8278bf%3A0x3027a76e352be70!2sTuban%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1681634917230!5m2!1sen!2sid" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>
</div>
<!-- /section -->
@endsection