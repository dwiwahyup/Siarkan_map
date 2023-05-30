@extends('users/layouts.template')

@section('content')
    <style>
        #map {
            height: 500px;
        }
    </style>

    <section class="wrapper bg-gray">
        <div class="container py-12 py-md-16 text-center">
            <div class="row">
                <div class="col-lg-10 col-xxl-8 mx-auto">
                    <h1 class="display-1 mb-3">Pemetaan</h1>
                    <p class="lead mb-1">Pemetaan Daerah Rawan Kecelakaan (Jalan Nasional)</p>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper bg-light ">
        <div class="container pb-2 pt-10">
            <div class="row">
                <section class="wrapper bg-light mb-5">
                    <div id="map"></div>
                </section>
            </div>
        </div>
    </section>

    @include('users/pemetaan/data')


    <section class="wrapper bg-gray">
        <div class="container py-8 py-md-6">
            <div class="text-center">
                <a href="#" class="btn btn-primary rounded-pill mx-1 mb-2 mb-md-0" data-bs-toggle="modal"
                    data-bs-target="#modal-01"> <i class="uil uil-location-point"></i> <span></span> Cek Daerah Rawan</a>
            </div>
        </div>
    </section>

    <section class="wrapper bg-light">
        <div class="container py-8 py-md-6">
            <h2 class="my-5">Data Lokasi Kecelakaan</h2>
            <hr class="my-5">
            <div class="row">
                <div class="col-12">
                    <table id="example" class="table table-striped text-center" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama Jalan</th>
                                <th>Alamat</th>
                                <th>Status Kerawanan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $lokasi)
                                <tr>
                                    <td>{{ $lokasi->nama_jalan }}</td>
                                    <td>{{ $lokasi->alamat }}</td>
                                    <td>
                                        @if ($lokasi->tingkat_kerawanan == 'Tidak Rawan')
                                            <a class="btn btn-green rounded-pill">{{ $lokasi->tingkat_kerawanan }}</a>
                                        @elseif ($lokasi->tingkat_kerawanan == 'Rawan')
                                            <a class="btn btn-yellow rounded-pill">{{ $lokasi->tingkat_kerawanan }}</a>
                                        @else
                                            <a class="btn btn-red rounded-pill">{{ $lokasi->tingkat_kerawanan }}</a>
                                        @endif
                                    </td>
                                    <td>
                                        @include('users/pemetaan/modalDetail')
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
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
    </section>


    @include('users/pemetaan/modalCreate')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
        // LeafLEad


        const map = L.map('map').setView([-6.9622, 111.9129], 11);

        L.tileLayer('http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        }).addTo(map);

        @foreach ($data as $lokasi)
            var markerColor = "blue"; // Default marker color

            @if ($lokasi->tingkat_kerawanan === 'Sangat Rawan')
                markerColor = "red"; // Change marker color to red for "Sangat Rawan" data points
            @elseif ($lokasi->tingkat_kerawanan === 'Rawan')
                markerColor = "yellow"; // Change marker color to yellow for "Rawan" data points
            @elseif ($lokasi->tingkat_kerawanan === 'Tidak Rawan')
                markerColor = "green"; // Change marker color to green for "Tidak Rawan" data points
            @endif

            var marker = L.marker([{{ $lokasi->latitude }}, {{ $lokasi->longitude }}], {
                icon: L.icon({
                    iconUrl: 'https://maps.google.com/mapfiles/ms/micons/' + markerColor + '-dot.png',
                    iconSize: [32, 32],
                    iconAnchor: [16, 32],
                    popupAnchor: [0, -28]
                })
            }).addTo(map);

            var popupContent = "<b>{{ $lokasi->nama_jalan }}</b><br>{{ $lokasi->alamat }}";
            marker.bindPopup(popupContent).openPopup();
        @endforeach
    </script>
@endsection
