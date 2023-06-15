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

                                        <button type="button" value="{{$data ->id}}" class="btn btn-info showbtn" data-bs-toggle="modal" data-bs-target="#detail-data">Detail </button>

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


<script>
    $(document).ready(function() {
        $(document).on('click', '.showbtn', function() {
            var id = $(this).val();
            $.ajax({
                type: "GET",
                url: 'kecelakaan/' + id,
                success: function(response) {
                    $('.tanggal').text(response.detail.tanggal);
                    $('.jam').text(response.detail.jam);
                    $('.nama_jalan').text(response.detail.nama_jalan);
                    $('.km_simpang_gang').text(response.detail.km_simpang_gang);
                    $('.dusun_desa').text(response.detail.dusun_desa);
                    $('.kecamatan').text(response.detail.kecamatan);
                    $('.kabupaten').text(response.detail.kabupaten);
                    $('.kendaraan').text(response.detail.kendaraan);
                    $('.korban_md').text(response.detail.korban_md);
                    $('.korban_lb').text(response.detail.korban_lb);
                    $('.korban_lr').text(response.detail.korban_lr);
                }
            })
        })
    })
</script>


@endsection