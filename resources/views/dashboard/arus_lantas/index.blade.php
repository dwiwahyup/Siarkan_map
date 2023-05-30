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
                <h4 class="Header-title">Data Arus Lalu Lintas</h4>
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
                    <p><a href="aruslantas/create" class="btn btn-secondary"> Tambah Data Arus Lalu Lintas</a></p>
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
                                    <th>Nama Jalan</th>
                                    <th>Jam</th>
                                    <th>Arah 1 </th>
                                    <th>Arah 2 </th>
                                    <th>Total 2 Arah </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)
                                <tr>
                                    <td>{{$data->nama_jalan}}</td>
                                    <td>{{$data->jam_mulai}} - {{$data->jam_selesai}}</td>
                                    <td>{{$data->total_arah_1}} ({{$data->arah_1}})</td>
                                    <td>{{$data->total_arah_2}} ({{$data->arah_2}}) </td>
                                    <td>{{$data->total_2_arah}}</td>
                                    <td>

                                        <a href="{{route('jalan.aruslantas.edit', ['jalan' => $data->jalan->slug, 'aruslanta' => $data->slug])}}" class="btn btn-success btn-md ml-1">Edit</a>
                                        <form action="{{route('jalan.aruslantas.destroy', ['jalan' => $data->jalan->id, 'aruslanta' => $data->id])}}" class="d-inline" method="POST">
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
                                    <th>Nama Jalan</th>
                                    <th>Jam</th>
                                    <th>Arah 1 </th>
                                    <th>Arah 2 </th>
                                    <th>Total 2 Arah </th>
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