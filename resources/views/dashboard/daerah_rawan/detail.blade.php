@extends('dashboard/layouts.template')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-left">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item">Data Kecalakaan</li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                    <a href="{{ URL::previous() }}">
                        <p>Kembali</p>
                    </a>
                    <h4 class="Header-title">Detail</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane show active" id="alt-pagination-preview">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="row g-2">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Nama Jalan</label>
                                            <input name="alamat" type="text" class="form-control">
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
                                            <label for="inputPassword4" class="form-label">Intensitas Kecelakaan</label>
                                            <input name="indensitas_kecelakaan" type="text" class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputPassword4" class="form-label">Kondisi Korban</label>
                                            <input name="kondisi_korban" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <label for="inputPassword4" class="form-label">Klafisikasi Kerawanan</label>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-danger">Sangat Rawan</button>
                                    <button type="button" class="btn btn-warning">Rawan</button>
                                    <button type="button" class="btn btn-info">Tidak Rawan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
