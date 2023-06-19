<!-- Tambah Data -->
<div id="detail-data" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fullWidthModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-full-width">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="fullWidthModalLabel">Detail Data Lokasi Kecelakaan</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form method="post" enctype="multipart/form-data">
                        <h4 class="header-title">Waktu Kejadian</h4>
                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Tanggal Kejadian</label>
                                <input class="form-control" name="tanggal" readonly>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Jam Kejadian</label>
                                <input class="form-control" type="text" name="jam" readonly>
                            </div>
                        </div>
                        <hr>
                        <h4 class="header-title">Lokasi TKP</h4>
                        <div class="row g-2">
                            <div class="mb-3 col-md-3">
                                <label class="form-label">Nama Jalan</label>
                                <input type="text" class="form-control" name="nama_jalan" readonly>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label class="form-label">KM</label>
                                <input type="text" class="form-control" name="km" readonly>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label class="form-label">Tkp/dusun</label>
                                <input type="text" class="form-control" name="tkp_dusun" readonly>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label class="form-label">Dusun/Desa</label>
                                <input type="text" class="form-control" name="desa" readonly>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="mb-3 col-md-3">
                                <label class="form-label">Kecamatan</label>
                                <input type="text" class="form-control" name="kecamatan" readonly>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label class="form-label">Kabupaten</label>
                                <input type="text" class="form-control" name="kabupaten" readonly>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label class="form-label">Latitude</label>
                                <input type="text" class="form-control" name="latitude" readonly>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label class="form-label">Longitude</label>
                                <input type="text" class="form-control" name="longitude" readonly>
                            </div>
                        </div>
                        <hr>
                        <h4 class="header-title">Kendaraan Yang Terlibat Laka</h4>
                        <div class="mb-3">
                            <label class="form-label">Kendaraan</label>
                            <input type="text" class="form-control" name="kendaraan" readonly>
                        </div>
                        <hr>
                        <h4 class="header-title">Kondisi Korban</h4>
                        <div class="row g-2">
                            <div class="mb-3 col-md-4">
                                <label class="form-label">Meninggal Dunia</label>
                                <input type="text" class="form-control" name="korban_md" readonly>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label">Luka Berat</label>
                                <input type="text" class="form-control" name="korban_lb" readonly>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label">Luka Ringan</label>
                                <input type="text" class="form-control" name="korban_lr" readonly>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
