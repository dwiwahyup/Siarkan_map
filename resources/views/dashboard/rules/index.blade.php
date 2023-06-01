@extends('dashboard/layouts.template')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-left">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Rules</li>
                    </ol>
                    <h4 class="Header-title">Data Ruless</h4>
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
                        <p><a href="aruslantas/create" class="btn btn-secondary"> Tambah Rules</a></p>
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
                            <table id="alternative-page-datatable"
                                class="table table-striped dt-responsive nowrap w-100 text-center">
                                <thead>
                                    <tr>
                                        <th>Jam Kecelakaan</th>
                                        <th>Kepadatan Kendaraan</th>
                                        <th>Intensitas Kecelakaan</th>
                                        <th>Kondisi Korban</th>
                                        <th>Tingkat Kerawanan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rules as $rule)
                                        <tr>
                                            <td>{{ $rule->jam }}</td>
                                            <td>{{ $rule->kepadatan }}</td>
                                            <td>{{ $rule->intensitas }}</td>
                                            <td>{{ $rule->kondisi_korban }}</td>
                                            <td
                                                style="color:
                                            @if ($rule->tingkat_kerawanan == 'Sangat Rawan') red;
                                            @elseif($rule->tingkat_kerawanan == 'Rawan')
                                                orange;
                                            @else
                                                green; @endif">
                                                {{ $rule->tingkat_kerawanan }}
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Jam Kecelakaan</th>
                                        <th>Kepadatan Kendaraan</th>
                                        <th>Intensitas Kecelakaan</th>
                                        <th>Kondisi Korban</th>
                                        <th>Tingkat Kerawanan</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div> <!-- end preview-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
@endsection
