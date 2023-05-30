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
                <div class="">
                    <p><a href="kecelakaan/create" class="btn btn-secondary"> Tambah Data Kecalakaan</a></p>
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
                        <table id="alternative-page-datatable" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Waktu Kejadian</th>
                                    <th><center> Lokasi TKP</center></th>
                                    <th>Kendaraan Terlibat</th>
                                    <th><center> Korban <br> MD</center></th>
                                    <th><center> Korban <br> LB</center></th>
                                    <th><center> Korban <br> LR</center></th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)
                                <tr>
                                    <td>{{$data->tanggal}} {{$data->jam}}</td>
                                    <td>{{$data->nama_jalan}} {{$data->km_simpang_gang}} <br> {{$data->dusun_desa}} Kecamatan {{$data->kecamatan}} Kab. {{$data->kabupaten}}</td>
                                    <td>{{$data->kendaraan}}</td>
                                    <td><center>{{$data->korban_md}}</center></td>
                                    <td><center>{{$data->korban_lb}}</center></td>
                                    <td><center>{{$data->korban_lr}}</center></td>
                                    <td>
                                        <a href="{{route('kecelakaan.edit', $data->slug)}}"
                                            class="btn btn-success btn-md ml-1">Edit</a>
                                        <form action="{{route('kecelakaan.destroy', $data->id)}}" class="d-inline"
                                            method="POST">
                                            {{ csrf_field() }}
                                            {{method_field('delete')}}
                                            <button class="btn btn-danger ml-1">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Waktu Kejadian</th>
                                    <th><center> Lokasi TKP</center></th>
                                    <th>Kendaraan Terlibat</th>
                                    <th><center> Korban <br> MD</center></th>
                                    <th><center> Korban <br> LB</center></th>
                                    <th><center> Korban <br> LR</center></th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div> <!-- end preview-->
                </div> <!-- end tab-content-->
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div> <!-- end row-->

@endsection
