@extends('layouts.frontend.main')


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
                height: 450px;
                width: 100%;
            }
        </style>
    </head>

    <body>

        <div class="container-fluid">
            <div class="container">

                <div class="col-12">
                    <!-- Page Heading -->
                    <h1 class="text-center h3 mb-4 text-gray-800">Sistem Informasi Geografis Lokasi Banksampah Kota
                        Pontianak</h1>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-9 text-center bg-blue py-3 collapse-inner rounded" style="background-color: #E8E8E8;">
                        <div class="col-12">
                            <div id="peta">
                            </div>
                        </div>
                    </div>

                    <div class="col-3 offset-0.5">
                        <div class="bg-blue py-4 collapse-inner rounded" style="background-color: #E8E8E8;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <i class="material-icons">location_on</i>
                                        <div class="text-center">
                                            <h1> <a href="{{ route('admin.datakecamatan') }}">4</a></h1>
                                            <h6>Kecamatan</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col">
                                <h2></h2>
                            </div>
                        </div>

                        <div class="bg-blue py-4 collapse-inner rounded" style="background-color: #E8E8E8;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <i class="material-icons">home</i>
                                        <div class="text-center">
                                            <h1><a href="{{ route('sigbs.dataBS') }}"> 7
                                                </a></h1>
                                            <h6>Unit Terdaftar</h6>
                                            {{-- <h1> {{ $akhir->id }}</h1> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col">
                                <h2></h2>
                            </div>
                        </div>

                        <div class="bg-blue py-4 collapse-inner rounded" style="background-color: #E8E8E8;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <i class="material-icons">delete</i>
                                        <div class="text-center">
                                            <h1><a href="{{ route('sigbs.dataBS') }}"> 100
                                                </a></h1>
                                            <h6>Data Sampah</h6>
                                        </div>
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
                    <div class="row ">
                        <div class="col-sm-5">
                            <h2></h2>
                        </div>
                    </div>
                </div>

                {{-- about us --}}
                <div class="container bg-blue py-4 collapse-inner rounded" style="background-color: #E8E8E8;">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h4>Tentang Kami</h4>
                            <p>Sistem Informasi Geografis Bank Sampah Kota Pontianak</p>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-4">
                            <img src="{{ asset('images/sigbs logo.png') }}" alt="logo" class="img-fluid" />
                        </div>

                        <div class="col-4 text-center offset-0.5">
                            SIGBS atau Sistem Informasi Geografis Bank Sampah di Kota Pontianak
                            merupakan sebuah website yang memberikan informasi tentang lokasi
                            Bank Sampah yang ada di Kota Pontianak beserta data-data lainnya
                        </div>

                        <div class="col-2 offset-1">
                            <button class="btn btn-primary">let's start</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- about us --}}
        {{-- <div class="container-fluid py-5" style="background-color: #E8E8E8;">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h4>Tentang Kami</h4>
                                <p>Sistem Informasi Geografis Bank Sampah Kota Pontianak</p>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="{{ asset('images/sigbs logo.png') }}" alt="logo" class="img-fluid" />
                            </div>

                            <div class="col-4 text-center offset-0.5">
                                SIGBS atau Sistem Informasi Geografis Bank Sampah di Kota Pontianak
                                merupakan sebuah website yang memberikan informasi tentang lokasi
                                Bank Sampah yang ada di Kota Pontianak beserta data-data lainnya
                            </div>

                            <div class="col-2 offset-1">
                                <button class="btn btn-primary">let's start</button>
                            </div>
                        </div>
                    </div>
                </div> --}}


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

                // var polygon = L.polygon([
                //     [-0.02316677842425604, 109.30980560646184],
                //     [-0.03882517293858486, 109.31065528687829],
                //     [-0.02225640658564864, 109.33159383999782],
                //     [-0.041374213662473375, 109.34033340999554]
                // ]).addTo(map);
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
