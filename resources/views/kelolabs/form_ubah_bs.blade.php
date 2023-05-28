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

        <style>
            #peta {
                height: 600px;
                width: 100%;
            }
        </style>
    </head>

    <body>

        <div class="container">
            <h1 class="h3 mb-4 text-gray-800">Form Edit Bank Sampah</h1>
            <form action="{{ route('admin.banksampah.ubah', ['id' => $bank->id]) }}" method="post"
                enctype="multipart/form-data">

                @csrf
                <div class="from-group">
                    <label for="nama">Nama Bank Sampah</label>
                    <input class="form-control" type="text" name="nama" value="{{ $bank->nama }}">

                </div>

                <div class="from-group">
                    <label for="alamat">Alamat Bank Sampah</label>
                    <input class="form-control" type="text" name="alamat" value="{{ $bank->alamat }}">

                </div>

                <div class="form-group">
                    <label for="foto">Foto Bank Sampah</label>
                    <input type="file" name="foto" class="form-control">
                </div>

                <div class="row">
                    <div class="col-sm-5">
                        <div class="from-group">
                            <label for="latitude">Latitude</label>
                            <input class="form-control" type="text" name="latitude" value="{{ $bank->latitude }}">
                        </div>

                        <div class="form-group">
                            <label for="longitude">Longitude</label>
                            <input class="form-control" type="text" name="longitude" value="{{ $bank->longitude }}"> >
                        </div>

                        <input class="btn btn-primary"type="submit" value="Ubah">
                        <a href="{{ route('admin.banksampah') }}" class="btn btn-primary">Batal</a>
                    </div>

                    <div class="col">
                        <div id="peta">
                        </div>
                    </div>
                </div>
        </div>

        </form>

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
            }).setView([-0.0300733, 109.3257109], 12);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(leafletMap);


            $(document).ready(function() {
                $.getJSON('', function(data) {

                    $.each(data, function(formUbahBS) {
                        L.marker([data[formUbahBS].latitude, data[formUbahBS].longitude]).addTo(
                            leafletMap);
                    })
                })
            })



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
    @endsection
