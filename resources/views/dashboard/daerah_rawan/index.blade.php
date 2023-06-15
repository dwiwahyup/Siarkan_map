@extends('dashboard.layouts.template')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-left">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item active">Data Kecalakaan</li>
                </ol>
                <h4 class="Header-title">Data Kecalakaan</h4>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div>
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#tambah-data">Tambah Data </button>
                </div>
                @if (session('success'))
                <div class="alert alert-success mt-4">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
                @endif
                <br>

                <div class="tab-content">
                    <div class="tab-pane show active" id="alt-pagination-preview">
                        <table id="alternative-page-datatable" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Jalan</th>
                                    <th>Alamat</th>
                                    <th>Status Kerawanan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($data->sortByDesc('created_at') as $lokasi)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $lokasi->jalan->nama_jalan }}</td>
                                    <td>{{ $lokasi->alamat }}</td>
                                    <td>{{ $lokasi->tingkat_kerawanan }}</td>
                                    <td>
                                        <a href="{{ route('daerahrawan.show', $lokasi->id) }}" type="button" class="btn btn-outline-info"><i class="mdi mdi-eye"></i></a>
                                        <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#warning-alert-modal"><i class="mdi mdi-window-close"></i></button>
                                        <div id="warning-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-body p-4">
                                                        <div class="text-center">
                                                            <i class="ri-alert-line h1 text-warning"></i>
                                                            <h4 class="mt-2">Hapus Data</h4>
                                                            <div class="text-center">
                                                                <p class="mt-3">Anda yakin menghapus data?<br>Data akan terhapus dari database</p>
                                                            </div>
                                                            <form action="{{ route('daerahrawan.delete', $lokasi->id) }}" method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn btn-warning btn-sm">Hapus Data</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Jalan</th>
                                    <th>Alamat</th>
                                    <th>Status Kerawanan</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Warning Alert Modal -->


@include('dashboard.daerah_rawan.createModal')
@include('dashboard.daerah_rawan.editModal')
@endsection