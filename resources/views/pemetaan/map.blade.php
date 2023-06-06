@extends('layouts.backend.main')


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

        <div class="container-fluid py-5" style="background-color: #e1e9e5;">
            <div class="container">

                <div class="col-12">
                    <h2 class="text-center">Sistem Informasi Geografis Lokasi Bank Sampah Kota Pontianak</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-9">
                    <div id="peta">
                    </div>
                </div>

                <div class="col-3 offset-0.5">
                    <div class="container-fluid py-3" style="background-color: #41d1b9;">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <i class="material-icons">home</i>
                                    <h4>Data unit terdaftar</h4>
                                    {{-- <h1> {{ $akhir->id }}</h1> --}}
                                    <a href="{{ route('admin.banksampah') }}" class="btn btn-primary btn-sm">Lihat Data</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col">
                            <h2></h2>
                        </div>
                    </div>

                    <div class="container-fluid py-3" style="background-color: #41d1b9;">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <i class="material-icons">location_on</i>
                                    <h4>Data Kecamatan</h4>
                                    <p>Sistem Informasi Geografis Bank Sampah Kota Pontianak</p>
                                    <a href="{{ route('admin.datakecamatan') }}" class="btn btn-primary btn-sm">Lihat
                                        Data</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-sm-5">
                            <h2></h2>
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
