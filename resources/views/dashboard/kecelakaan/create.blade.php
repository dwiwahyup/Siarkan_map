@extends('dashboard/layouts.template')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-left">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item active">Data Kecelakaan</li>
                </ol>
                <h4 class="Header-title">Tambah Data Kecalakaan</h4>
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
                        <form action="{{route('jalan.kecelakaan.store', $data->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <h4 class="header-title">Waktu Kejadian</h4>
                            <div class="row g-2">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Tanggal Kejadian</label>
                                    <input class="form-control" type="date" name="tanggal">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Jam Kejadian</label>
                                    <input class="form-control" type="time" name="jam">
                                </div>
                            </div>
                            <hr>
                            <h4 class="header-title">Lokasi TKP</h4>
                            <div class="row g-2">
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">Nama Jalan</label>
                                    <select class="form-select" name="jalans_id">
                                        <option>Pilih Jalan</option>
                                        <option value="{{$data->nama_jalan}}">{{$data->nama_jalan}}</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">Km</label>
                                    <input type="text" class="form-control" name="km">
                                </div>
                                
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">TKP/Dusun</label>
                                    <input type="text" class="form-control" name="tkp_dusun">
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label class="form-label">Dusun/Desa</label>
                                    <input type="text" class="form-control" name="desa">
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">Kecamatan</label>
                                    <input type="text" class="form-control" name="kecamatan">
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">Kabupaten</label>
                                    <input type="text" class="form-control" name="kabupaten">
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">Latitude</label>
                                    <input type="text" class="form-control" name="latitude">
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">Longitude</label>
                                    <input type="text" class="form-control" name="longitude">
                                </div>
                                
                            </div>
                            <hr>
                            <h4 class="header-title">Kendaraan Yang Terlibat Laka</h4>
                            <div class="mb-3">
                                <label class="form-label">Kendaraan</label>
                                <input type="text" class="form-control" name="kendaraan">
                            </div>
                            <hr>
                            <h4 class="header-title">Kondisi Korban</h4>
                            <div class="row g-2">
                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Meninggal Dunia</label>
                                    <input type="number" class="form-control" name="korban_md">
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Luka Berat</label>
                                    <input type="number" class="form-control" name="korban_lb">
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Luka Ringan</label>
                                    <input type="number" class="form-control" name="korban_lr">
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
    timepicker.on('change', function (evt) {

        var value = (evt.hour || '00') + ':' + (evt.minute || '00');
        evt.element.value = value;

    });

</script>
<script src="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
<link href="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet" />


@endsection
