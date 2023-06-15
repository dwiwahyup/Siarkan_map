@extends('dashboard/layouts.template')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-left">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data User</li>
                    </ol>
                    <h4 class="Header-title">Data User</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- <div class="">
                        <p><a href="jalan/create" class="btn btn-secondary"> Tambah Data Jalan</a></p>
                    </div> -->
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
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->role}}</td>
                                            <td style="text-align: center;">
                                            <a href="{{ route('user.edit', $data->id) }}"
                                                    class="btn btn-success btn-md ml-1">Edit</a>

                                                <button type="button" class="btn btn-danger ml-1" data-bs-toggle="modal"
                                                    data-bs-target="#warning-alert-modal">Delete
                                                </button>



                                                <div id="warning-alert-modal" class="modal fade" tabindex="-1"
                                                    role="dialog" aria-hidden="true">
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
                                                                    <form action="{{ route('user.destroy', $data->id) }}"
                                                                        class="d-inline" method="POST">
                                                                        {{ csrf_field() }}
                                                                        {{ method_field('delete') }}
                                                                        <button class="btn btn-danger ml-1">Delete</button>
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
                                    <tr class="">
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div> 
                    </div>
                </div>
            </div> 
        </div>
    </div>
@endsection
