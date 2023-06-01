@extends('dashboard/layouts.template')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class=" col-lg-12">

            <div class="row">
                <div class="col-sm-4">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-account-multiple widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Daerah Sangat Rawan</h5>
                            <h3 class="mt-3 mb-1">{{ $sangatRawanCount }}</h3>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-account-multiple widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Daerah Rawan</h5>
                            <h3 class="mt-3 mb-1">{{ $rawanCount }}</h3>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-account-multiple widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Daerah Tidak Rawan</h5>
                            <h3 class="mt-3 mb-1">{{ $tidakRawanCount }}</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
