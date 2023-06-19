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
        
    var marker = L.marker([{{ $lokasi->latitude }}, {{ $lokasi->longitude }}]).addTo(map);
    
    var popupContent = "<b>{{ $lokasi->nama_jalan }}</b><br>{{ $lokasi->km }}";
    marker.bindPopup(popupContent).openPopup();
    
    @endforeach
    
</script>

@endsection