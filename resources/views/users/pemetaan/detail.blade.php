@extends('users/layouts.template')

@section('content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
            <div class="row">
                <div class="col-md-10 col-xl-8 mx-auto">
                    <div class="post-header">
                        <h1 class="display-1 mb-5">Detail Data</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper bg-light">
        <div class="container pb-14 pb-md-16">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="blog single mt-n17">
                        <div class="card shadow-lg">
                            <a href="{{ URL::previous() }}" class="m-1 p-1">
                                <p><i class="uil uil-angle-left"></i> Kembali</p>
                            </a>
                            <div class="card-body py-0">
                                <div class="d-flex justify-content-end">
                                    <a href="https://www.google.com/maps/?t=k&q={{ $data->latitude . ',' . $data->longitude }}"
                                        target="_blank" class="btn btn-outline-danger btn-sm">
                                        <i class="fal fa-map-marker-alt"></i>
                                        Lihat di Google Maps
                                    </a>
                                </div>
                                <hr>
                                <div class="container pb-14 pb-md-16">
                                    <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
                                        <div class="col col-sm-6">
                                            <small class="text-muted">Informasi Umum</small>
                                            <table class="table">
                                                <tr>
                                                    <th scope="row">Nama Jalan</th>
                                                    <td>:</td>
                                                    <td class="text-right">{{ $data->jalan->nama_jalan }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Alamat</th>
                                                    <td>:</td>
                                                    <td class="text-right">{{ $data->alamat }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Latitude</th>
                                                    <td>:</td>
                                                    <td class="text-right">{{ $data->latitude }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Longitude</th>
                                                    <td>:</td>
                                                    <td class="text-right">{{ $data->longitude }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col col-sm-6">
                                            <small class="text-muted">Informasi Kondisi Daerah</small>
                                            <table class="table">
                                                <tr>
                                                    <th scope="row">Jam Kecelakaan</th>
                                                    <td>:</td>
                                                    <td class="text-right">{{ $data->jam_kecelakaan }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Kepadatan Jalan</th>
                                                    <td>:</td>
                                                    <td class="text-right">{{ $data->kepadatan }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Intensitas Kecelakaan</th>
                                                    <td>:</td>
                                                    <td class="text-right">{{ $data->intensitas_kecelakaan }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Kondisi Korban</th>
                                                    <td>:</td>
                                                    <td class="text-right">{{ $data->kondisi_korban }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <hr class="pt-0 mt-0">
                                        <div class="row pt-3">
                                            <div class="col-lg-6 text-end pt-3">
                                                <p>Tingkat Kerawanan</p>
                                            </div>
                                            <div class="col-lg-6">
                                                @if ($data->tingkat_kerawanan == 'Tidak Rawan')
                                                    <a
                                                        class="btn btn-green rounded-pill">{{ $data->tingkat_kerawanan }}</a>
                                                @elseif ($data->tingkat_kerawanan == 'Rawan')
                                                    <a
                                                        class="btn btn-yellow rounded-pill">{{ $data->tingkat_kerawanan }}</a>
                                                @else
                                                    <a class="btn btn-red rounded-pill">{{ $data->tingkat_kerawanan }}</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
