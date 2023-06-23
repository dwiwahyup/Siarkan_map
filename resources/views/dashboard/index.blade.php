@extends('dashboard/layouts.template')

@section('content')
<style>
    #map {
        height: 500px;
    }
</style>

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
    <div class="col-lg-12">
        <div class="row">
            <div class="col-sm-3">
                <div class="card widget-flat">
                    <div class="card-body">
                        <div class="float-end">
                            <i class="mdi mdi-account-multiple widget-icon"></i>
                        </div>
                        <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Jumlah Korban Meninggal</h5>
                        <h3 class="mt-3 mb-1">{{$md}}</h3>
                    </div> 
                </div> 
            </div>

            <div class="col-sm-3">
                <div class="card widget-flat">
                    <div class="card-body">
                        <div class="float-end">
                            <i class="mdi mdi-account-multiple widget-icon"></i>
                        </div>
                        <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Jumlah Korban Luka Berat</h5>
                        <h3 class="mt-3 mb-1">{{$lb}}</h3>
                    </div> 
                </div> 
            </div>

            <div class="col-sm-3">
                <div class="card widget-flat">
                    <div class="card-body">
                        <div class="float-end">
                            <i class="mdi mdi-account-multiple widget-icon"></i>
                        </div>
                        <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Jumlah Korban Luka Ringan</h5>
                        <h3 class="mt-3 mb-1">{{$lr}}</h3>
                    </div> 
                </div> 
            </div>

            <div class="col-sm-3">
                <div class="card widget-flat">
                    <div class="card-body">
                        <div class="float-end">
                            <i class="mdi mdi-account-multiple widget-icon"></i>
                        </div>
                        <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Jumlah Kasus Kecelakan</h5>
                        <h3 class="mt-3 mb-1">{{$jumlah_laka}}</h3>
                    </div> 
                </div> 
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">Peta Kecelakaan</h4>
                <div id="map"></div>
            </div>
        </div>
    </div>
</div>
<script>
    const map = L.map('map').setView([-6.9622, 111.9129], 11);

    L.tileLayer('http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    }).addTo(map);

    @foreach ($data as $lokasi)
        var latitude = {{ $lokasi->latitude }};
        var longitude = {{ $lokasi->longitude }};
        //jika titik koordinat sama maka buat circle
        
        @if ($lokasi->jumlah > 1)
            var circle = L.circle([latitude, longitude], {
                color: 'red',
                fillColor: '#f03',
                fillOpacity: 0.5,
                radius: 500 // Adjust the radius as desired
            }).addTo(map);
            circle.bindPopup("<b>{{ $lokasi->nama_jalan }}</b><br>{{ $lokasi->km }} {{ $lokasi->tkp_dusun }} <br> {{ $lokasi->desa }}  {{ $lokasi->kecamatan }} <br> Koordinat: " + latitude + "," + longitude);
        @else
            var marker = L.marker([latitude, longitude]).addTo(map);
            marker.bindPopup("<b>{{ $lokasi->nama_jalan }}</b><br>{{ $lokasi->km }} {{ $lokasi->tkp_dusun }} <br> {{ $lokasi->desa }}  {{ $lokasi->kecamatan }} <br> Koordinat: " + latitude + "," + longitude).openPopup();
        @endif
    @endforeach

//     var circle = L.circle([-6.783070, 111.916720], {
//     color: 'red',
//     fillColor: '#f03',
//     fillOpacity: 0.5,
//     radius: 500
// }).addTo(map);
</script>



@endsection