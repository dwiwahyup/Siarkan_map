<!-- {{-- ----------------------------------------Modal Tambah Data --------------------------------------------- --}} -->

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
                        <form action="{{route('fuzzy')}}" class="text-start mb-3" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="container">
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Nama Jalan</label>
                                        <div class="form-select-wrapper mb-4">
                                            <select id="inputState" class="form-select" name="nama_jalan">
                                                <option>Choose</option>
                                                @foreach ($jalan as $lokasi)
                                                    <option value="{{ $lokasi->nama_jalan }}">{{ $lokasi->nama_jalan }}
                                                    </option>
                                                @endforeach
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
                                        <input class="form-control" type="text" name="jam_kecelakaan">
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
                                        <input name="intensitas_kecelakaan" type="text" class="form-control">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="inputPassword4" class="form-label">Kondisi
                                            Korban</label>
                                        <input name="kondisi_korban" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <button type="sumbit" class="btn btn-primary rounded-pill btn-login w-100 mb-2">Hitung
                                            Kerawanan</button>
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
