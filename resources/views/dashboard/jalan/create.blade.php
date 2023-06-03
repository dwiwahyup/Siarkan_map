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
                            <form action="{{route('jalan.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="nama_jalan" class="form-label">Nama Jalan</label>
                                        <input type="text" id="simpleinput" class="form-control" name="nama_jalan" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="example-select" class="form-label">Status Jalan</label>
                                        <select class="form-select" id="example-select" name="status_jalan" required>
                                            <option value="Luar Kota">Jalan Luar Kota</option>
                                            <option value="Dalam Kota">Jalan Dalam Kota</option>
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
