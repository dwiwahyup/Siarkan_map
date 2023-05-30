<!-- Tambah Data -->
<div id="tambah-data" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fullWidthModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-full-width">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="fullWidthModalLabel">Tambah Data Lokasi Kecelakaan</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label for="inputState" class="form-label">Nama Jalan</label>
                            <select id="inputState" class="form-select">
                                <option>Choose</option>
                                @foreach ($jalan as $lokasi)
                                    <option>{{ $lokasi->nama_jalan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Alamat</label>
                            <input name="alamat" type="text" class="form-control" placeholder="Alamat">
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label for="inputPassword4" class="form-label">Lattitude</label>
                            <input name="lattitude" type="text" class="form-control" placeholder="Lattitude">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputPassword4" class="form-label">Longitude</label>
                            <input name="longitude" type="text" class="form-control" placeholder="Longitude">
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Jam Kecelakaan</label>
                            <input class="form-control" type="time" name="jam_kecelakaan">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputPassword4" class="form-label">Kepadatan</label>
                            <input name="kepadatan" type="text" class="form-control" placeholder="Kepadatan Jalan">
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label for="inputPassword4" class="form-label">Intensitas Kecelakaan</label>
                            <input name="intensitas_kecelakaan" type="text" class="form-control"
                                placeholder="Intensitas Kecelakaan">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputPassword4" class="form-label">Kondisi Korban</label>
                            <input name="kondisi_korban" type="text" class="form-control"
                                placeholder="Kondisi Korban">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Proses</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
