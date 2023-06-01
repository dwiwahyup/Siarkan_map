<section class="wrapper bg-light">
    <div class="container py-8 py-md-6">
        <div class="row">
            <div class="col-xl-10 col-xxl-9 mx-auto">
                <div class="row align-items-center justify-content-center counter-wrapper gy-6">
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row align-items-center">
                                    <div>
                                        <div
                                            class="icon btn btn-circle btn-lg btn-soft-red pe-none mx-auto me-4 mb-lg-3 mb-xl-0">
                                            <i class="uil uil-clipboard-notes"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 class="counter mb-1">{{ $sangatRawanCount }}</h3>
                                        <p class="mb-0">Sangat Rawan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row align-items-center">
                                    <div>
                                        <div
                                            class="icon btn btn-circle btn-lg btn-soft-yellow pe-none mx-auto me-4 mb-lg-3 mb-xl-0">
                                            <i class="uil uil-clipboard-notes"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 class="counter mb-1">{{ $rawanCount }}</h3>
                                        <p class="mb-0">Rawan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row align-items-center">
                                    <div>
                                        <div
                                            class="icon btn btn-circle btn-lg btn-soft-green pe-none mx-auto me-4 mb-lg-3 mb-xl-0">
                                            <i class="uil uil-clipboard-notes"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 class="counter mb-1">{{ $tidakRawanCount }}</h3>
                                        <p class="mb-0">Tidak Rawan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
