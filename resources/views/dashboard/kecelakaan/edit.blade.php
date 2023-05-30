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
                <h4 class="Header-title">Edit Data Kecalakaan</h4>
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
                        <form action="{{route('kecelakaan.update', $data->id)}}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <h4 class="header-title">Waktu Kejadian</h4>
                            <div class="row g-2">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Tanggal Kejadian</label>
                                    <input class="form-control" type="date" name="tanggal" value="{{old('tanggal') ?? $data->tanggal}}">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Jam Kejadian</label>
                                    <input class="form-control" type="time" name="jam" value="{{old('jam') ?? $data->jam}}">
                                </div>
                            </div>
                            <hr>
                            <h4 class="header-title">Lokasi TKP</h4>
                            <div class="row g-2">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Nama Jalan</label>
                                    <select class="form-select" name="nama_jalan">
                                        <option>{{old('nama_jalan') ?? $data->nama_jalan}}</option>
                                        @foreach ($dataa as $jalan)
                                            <option>{{$jalan->nama_jalan}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">KM/Simpang/Gang</label>
                                    <input type="text" class="form-control" name="km_simpang_gang" value="{{old('km_simpang_gang') ?? $data->km_simpang_gang}}">
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">Dusun/Desa</label>
                                    <input type="text" class="form-control" name="dusun_desa" value="{{old('dusun_desa') ?? $data->dusun_desa}}">
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Kecamatan</label>
                                    <input type="text" class="form-control" name="kecamatan" value="{{old('kecamatan') ?? $data->kecamatan}}">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Kabupaten</label>
                                    <input type="text" class="form-control" name="kabupaten" value="{{old('kabupaten') ?? $data->kabupaten}}">
                                </div>
                            </div>
                            <hr>
                            <h4 class="header-title">Kendaraan Yang Terlibat Laka</h4>
                            <div class="mb-3">
                                <label class="form-label">Kendaraan</label>
                                <input type="text" class="form-control" name="kendaraan" value="{{old('kendaraan') ?? $data->kendaraan}}">
                            </div>
                            <hr>
                            <h4 class="header-title">Kondisi Korban</h4>
                            <div class="row g-2">
                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Meninggal Dunia</label>
                                    <input type="text" class="form-control" name="korban_md" value="{{old('korban_md') ?? $data->korban_md}}">
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Luka Berat</label>
                                    <input type="text" class="form-control" name="korban_lb" value="{{old('korban_lb') ?? $data->korban_lb}}">
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Luka Ringan</label>
                                    <input type="text" class="form-control" name="korban_lr" value="{{old('korban_lr') ?? $data->korban_lr}}">
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
