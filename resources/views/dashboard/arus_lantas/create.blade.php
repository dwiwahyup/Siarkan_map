@extends('dashboard/layouts.template')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-left">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item active">Data Arus Lalu Lintas</li>
                </ol>
                <h4 class="Header-title">Tambah Data Arus Lalu Lintas</h4>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                {{-- @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
            </div>
            @endif

            @if (session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
            @endif --}}
            <div class="tab-content">
                <div class="tab-pane show active" id="input-types-preview">
                    <div class="row">
                        <form action="{{route('jalan.aruslantas.store', $jalan->id)}}" method="post" enctype="multipart/form-data">
                            @csrf


                            <h4 class="header-title">Lokasi Penngamatan</h4>
                            <div class="row g-2">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Nama Jalan</label>
                                    <select class="form-select" name="nama_jalan" required>
                                        <option>Pilih Jalan</option>
                                        <option>{{$jalan->nama_jalan}}</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <h4 class="header-title">Waktu Pengamatan</h4>
                            <div class="row g-2">
                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Waktu Mulai Pengamatan</label>
                                    <input class="form-control" type="time" name="jam_mulai" required>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Waktu Selesai Pengamatan</label>
                                    <input class="form-control" type="time" name="jam_selesai" required>
                                </div>
                            </div>
                            <hr>
                            <h4 class="header-title">Arah Arus Pengamatan</h4>
                            <div class="row g-2">
                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Arah 1</label>
                                    <select class="form-select" name="arah_1" required>
                                        <option>Pilih Arah</option>
                                        <option> Barat - Timur</option>
                                        <option> Timut - Barat</option>
                                        <option> Selatan - Utara</option>
                                        <option> Utara - Selatan</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Arah 2</label>
                                    <select class="form-select" name="arah_2" required>
                                        <option>Pilih Arah</option>
                                        <option> Barat - Timur</option>
                                        <option> Timut - Barat</option>
                                        <option> Selatan - Utara</option>
                                        <option> Utara - Selatan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Total Arah 1</label>
                                    <input type="text" class="form-control" name="total_arah_1" required>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Total Arah 2</label>
                                    <input type="text" class="form-control" name="total_arah_2" required>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Total 2 Arah</label>
                                    <input type="text" class="form-control" name="total_2_arah" required>
                                </div>
                            </div>
                            <p><button type="submit" class="btn btn-primary plus float-right">Simpan</button></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    var timepicker = new TimePicker('time', {
        lang: 'en',
        theme: 'dark'
    });
    timepicker.on('change', function(evt) {

        var value = (evt.hour || '00') + ':' + (evt.minute || '00');
        evt.element.value = value;

    });
</script>
<script src="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
<link href="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet" />


@endsection