@extends('dashboard/layouts.template')
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
                <div class="row">
                    <div class="col-lg-5">
                        <p><a href="kecelakaan/create" class="btn btn-secondary"> Tambah Data Kecalakaan</a></p>
                    </div>
                    <div class="col-lg-7">
                        <h3 class="text-info">{{$nama_jalan->nama_jalan}}</h3>
                    </div>
                </div>
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
                <br>

                <div class="tab-content">
                    <div class="tab-pane show active" id="alt-pagination-preview">
                        <table id="alternative-page-datatable" class="table table-striped dt-responsive nowrap w-100 text-center">
                            <thead>
                                <tr>
                                    <th>Jalan</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)
                                <tr>
                                    <td>{{$data->nama_jalan}}</td>
                                    <td>{{$data->tanggal}}</td>
                                    <td>{{$data->jam}}</td>

                                    <td>

                                        <a href="{{route('jalan.kecelakaan.edit', ['jalan' => $data->jalan->slug, 'kecelakaan' => $data->slug])}}" class="btn btn-success btn-md ml-1">Edit</a>

                                        <button type="button" value="{{$data->id}}" class="btn btn-info showbtn" data-bs-toggle="modal" data-bs-target="#detail-data">Detail </button>

                                        <button type="button" class="btn btn-danger ml-1" data-bs-toggle="modal" data-bs-target="#warning-alert-modal">Delete
                                        </button>

                                        <div id="warning-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-body p-4">
                                                        <div class="text-center">
                                                            <i class="ri-alert-line h1 text-warning"></i>
                                                            <h4 class="mt-2">Hapus Data</h4>
                                                            <div class="text-center">
                                                                <p class="mt-3">Anda yakin menghapus
                                                                    data?
                                                                    <br>
                                                                    Data akan terhapus dari database
                                                                </p>
                                                            </div>
                                                            <form action="{{ route('jalan.kecelakaan.destroy', ['jalan' => $data->jalan->id, 'kecelakaan' => $data->id]) }}" class="d-inline" method="POST">
                                                                {{ csrf_field() }}
                                                                {{ method_field('delete') }}
                                                                <button id="deleteButton" class="btn btn-danger ml-1">Delete</button>
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
                                    <th>Jalan</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
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


@include('dashboard.kecelakaan.detail')

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery(document).on('click', '.showbtn', function() {
                var kecelakaan = jQuery(this).val();
                var jalan = {{$nama_jalan->id}};
                console.log(jalan);
                $.ajax({
                    type: "GET",
                    url: '/dashboard/jalan/' + jalan + '/kecelakaan/' + kecelakaan,
                    success: function(response) {
                        // console.log(response.detail.tanggal);
                        $('input[name="tanggal"]').val(response.detail.tanggal);
                        $('input[name="jam"]').val(response.detail.jam);
                        $('input[name="nama_jalan"]').val(response.detail.nama_jalan);
                        $('input[name="km"]').val(response.detail.km);
                        $('input[name="tkp_dusun"]').val(response.detail.tkp_dusun);
                        $('input[name="desa"]').val(response.detail.desa);
                        $('input[name="kecamatan"]').val(response.detail.kecamatan);
                        $('input[name="kabupaten"]').val(response.detail.kabupaten);
                        $('input[name="latitude"]').val(response.detail.latitude);
                        $('input[name="longitude"]').val(response.detail.longitude);
                        $('input[name="kendaraan"]').val(response.detail.kendaraan);
                        $('input[name="korban_md"]').val(response.detail.korban_md);
                        $('input[name="korban_lb"]').val(response.detail.korban_lb);
                        $('input[name="korban_lr"]').val(response.detail.korban_lr);
                    }
                })
            })
        })
    </script>


@push('js')
@endpush


@endsection