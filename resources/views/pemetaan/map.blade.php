@extends('layouts.backend.main')

@section('title', 'Dashboard')
@section('content')

    <head>
        <!-- css leaflfet -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
            integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
            crossorigin="" />

        <!-- leafletjs -->
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>
        <script src="geosearch/src/js/l.control.geosearch.js"></script>
        <script src="geosearch/src/js/l.geosearch.provider.google.js"></script>

        <!-- leaflet search -->
        <link rel="stylesheet" href="geosearch/src/css/l.geosearch.css" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.css">
        <script src="https://unpkg.com/leaflet-geosearch@3.1.0/dist/geosearch.umd.js"></script>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <!-- CSS Icon-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <style>
            #peta {
                height: 550px;
                width: 100%;
            }
        </style>
    </head>

    <body>
        <div class="row">
            <!-- Data Kecamatan -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">

                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Data Kecamatan
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">7 Kecamatan</div>
                                {{-- <h1> {{ $akhir->id }}</h1> --}}
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('admin.datakecamatan') }}" class="d-none d-sm-inline-block">
                                    <i class="fas fa-map fa-2x text-gray-300"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data Banksampah -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Data Unit Terdaftar </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">20 Unit</div>
                                {{-- <h1> {{ $akhir->id }}</h1> --}}
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Data Sampah</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">50 Data</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-trash fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Peta --}}

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-secondary">Pemetaan</h6>
            </div>

            <div class="card-body">
                <div class="container-fluid py-5">
                    <div class="row">
                        <div class="col">
                            <div id="peta">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
        </div>




        {{-- peta --}}
        <script>
            // you want to get it of the window global
            const providerOSM = new GeoSearch.OpenStreetMapProvider();

            //leaflet map
            var leafletMap = L.map('peta', {
                fullscreenControl: true,

                // OR
                fullscreenControl: {
                    pseudoFullscreen: false // if true, fullscreen to page width and height
                },
                minZoom: 2
            }).setView([-0.025610106086020566, 109.34133018152254], 13);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(leafletMap);

            @foreach ($bank as $bnk)

                L.marker([{{ $bnk->latitude }}, {{ $bnk->longitude }}]).addTo(
                    leafletMap).bindPopup(
                    '<h5>{{ $bnk->nama }}</h5><br> <img src={{ asset('storage/' . $bnk->foto) }} width="150px" <br> Alamat : {{ $bnk->alamat }}', {
                        maxWidth: '150'
                    }
                );
            @endforeach

            // $(document).ready(function() {
            //     $.getJSON('kelolabs/titik', function(data) {
            //         $.each(data, function(dashboard) {

            //             L.marker([data[dashboard].latitude, data[dashboard].longitude]).addTo(
            //                 leafletMap);



            // L.marker([data[dashboard].latitude, data[dashboard].longitude]).addTo(
            // leafletMap);



            // 
            //     L.marker([$bnk - > lat, $bnk - > lng]).addTo(
            //         leafletMap).bindPopup('Nama' = $bnk - > nama, 'Alamat' = $bnk -
            //         >
            //         alamat);
            // }


            // layer.on('click', (e) => {
            //     $.getJSON('kelolabs/popup' + feature.properties.id, function(
            //         detail) {
            //         $.each(detail, function(dashboard) {
            //             var html = '<h5>Nama :' + detail[dashboard]
            //                 .nama + '</h5';

            //             L.popup()
            //                 .setLatLng(layer.getBounds()
            //                     .getCenter())
            //                 .setContent(html)
            //                 .openOn(leafletMap);


            //         });
            //     });
            // });
            // });

            // });

            // });








            // .bindPopup('<b>Marker</b>')



            // layer.on('click', (e) => {

            //     $.getJSON('kelolabs/lokasi' + feature.properties.id, function(
            //         detail) {
            //         $.each(detail, function(dashboard) {
            //             var



            //             let popup = L.popup().setLatLng([latitude,
            //                     longitude
            //                 ])
            //                 .setContent("Kordinat : " + latitude +
            //                     " - " + longitude)
            //                 .openOn(leafletMap);


            //         });
            //     })

            // })


            // let popup = L.popup()
            //     .setContent("Kordinat : " + latitude + " - " + longitude)





            // let theMarker = {};

            // leafletMap.on('click', function(e) {
            //     let latitude = e.latlng.lat.toString().substring(0, 15);
            //     let longitude = e.latlng.lng.toString().substring(0, 15);
            //     document.getElementById("latitude").value = latitude;
            //     document.getElementById("longitude").value = longitude;
            //     document.getElementById("lokasi").value = latitude + "," + longitude;

            //     let popup = L.popup()
            //         .setLatLng([latitude, longitude])
            //     // .setContent("Kordinat : " + latitude + " - " + longitude)
            //     // .openOn(leafletMap);

            //     if (theMarker != undefined) {
            //         leafletMap.removeLayer(theMarker);
            //     };
            //     theMarker = L.marker([latitude, longitude]).addTo(leafletMap);
            // });

            const search = new GeoSearch.GeoSearchControl({
                provider: providerOSM,
                style: 'icon',
                searchLabel: 'Klik Pencarian Lokasi',
            });
            leafletMap.addControl(search);
        </script>
    </body>






@endsection
