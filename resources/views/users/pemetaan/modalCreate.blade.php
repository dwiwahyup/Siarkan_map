{{-- ----------------------------------------Modal Tambah Data --------------------------------------------- --}}

<div class="modal fade" id="modal-01" tabindex="-1">
    {{-- <div class="modal-dialog modal-xl"> --}}
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-body p-6">
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h3>Cek Kerawanan Kecelakaan</h3>
                <hr>
                <div class="row">
                    {{-- <div class=""> --}}
                    <div id="mc_embed_signup">
                        <form action="" class="text-start mb-3" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="container">
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Nama Jalan</label>
                                        <div class="form-select-wrapper mb-4">
                                            <select class="form-select" aria-label="Default select example"
                                                name="nama_jalan">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
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
                                <div class="row">
                                    <div class="col-3">
                                        <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Hitung
                                            Kerawanan</a>
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
