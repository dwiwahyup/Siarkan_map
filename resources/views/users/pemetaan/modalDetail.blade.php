{{-- ----------------------------------------Modal Detail --------------------------------------------- --}}

<div class="modal fade" id="modal-02" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content text-center">
            <div class="modal-body">
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h3>Detail</h3>
                <hr>
                <div class="newsletter-wrapper">
                    <div class="row">
                        <div class="">
                            <div id="mc_embed_signup">
                                <form class="text-start mb-3">
                                    <div class="container">
                                        <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Nama Jalan</label>
                                                <div class="form-select-wrapper mb-4">
                                                    <input name="nama_jalan" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Alamat</label>
                                                <input name="alamat" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                                <label for="inputPassword4" class="form-label">Lattitude</label>
                                                <input name="lattitude" type="text" class="form-control">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="inputPassword4" class="form-label">Longitude</label>
                                                <input name="longitude" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Jam Kecelakaan</label>
                                                <input class="form-control" type="time" name="jam_kecelakaan">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="inputPassword4" class="form-label">Kepadatan</label>
                                                <input name="kepadatan" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                                <label for="inputPassword4" class="form-label">Intensitas
                                                    Kecelakaan</label>
                                                <input name="indensitas_kecelakaan" type="text" class="form-control">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="inputPassword4" class="form-label">Kondisi
                                                    Korban</label>
                                                <input name="kondisi_korban" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <hr class="mb-5">
                                        <div class="row g-2">
                                            <div class="mb-3 col-md-3">
                                                <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Hitung
                                                    Kerawanan</a>
                                            </div>
                                            <div class="mb-3 pt-2 col-lg-5 text-end">
                                                <i class="">Status Kerawanan :</i>
                                            </div>
                                            <div class="mb-3 col-md-3">
                                                <a class="btn btn-red rounded-pill btn-login w-100 mb-2">Sangat
                                                    Rawan</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
