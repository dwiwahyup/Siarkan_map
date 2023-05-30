@extends('dashboard/layouts.template')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-left">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item active">Data Jalan</li>
                </ol>
                <h4 class="Header-title">Tambah Data Jalan</h4>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Input Types</h4>
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
                @endif
                <div class="tab-content">
                    <div class="tab-pane show active" id="input-types-preview">
                        <div class="row">
                            <form action="{{route('jalan.update', $data->id)}}" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Nama Jalan</label>
                                        <input type="text" id="simpleinput" class="form-control" name="nama_jalan" value="{{old('nama_jalan') ?? $data->nama_jalan}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label" >Panjang Jalan (KM)</label>
                                        <input type="text" id="simpleinput" class="form-control" name="panjang_jalan" value="{{old('panjang_jalan') ?? $data->panjang_jalan}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="example-select" class="form-label">Status Jalan</label>
                                        <select class="form-select" id="example-select" name="status_jalan">
                                            <option>{{old('status_jalan') ?? $data->status_jalan}}</option>
                                            <option>Jalan Nasional</option>
                                            <option>Jalan Provinsi</option>
                                            <option>Jalan Kabupaten</option>
                                        </select>
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

@endsection
