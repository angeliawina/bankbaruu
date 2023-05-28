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
            <h1>Pemetaan Lokasi Banksampah di Kota Pontianak</h1>
            <div class="row">
                <div class="col">
                    <div id="peta">
                    </div>
                </div>

                <div class="col-sm-5">
                    @csrf
                    <div class="form-group">
                        <label for="latitude">Latitude</label>
                        <input class="form-control" name="latitude" id="latitude" cols="30" rows="10">
                    </div>
                    <div class="form-group">
                        <label for="longitude">Longitude</label>
                        <input class="form-control" name="longitude" id="longitude" cols="30" rows="10">
                    </div>
                    <div class="form-group">
                        <label for="longitude">Lokasi</label>
                        <input class="form-control" name="lokasi" id="lokasi" cols="30" rows="10">
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
            }).setView([-0.0300733, 109.3257109], 12);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(leafletMap);



            let theMarker = {};

            leafletMap.on('click', function(e) {
                let latitude = e.latlng.lat.toString().substring(0, 15);
                let longitude = e.latlng.lng.toString().substring(0, 15);
                document.getElementById("latitude").value = latitude;
                document.getElementById("longitude").value = longitude;
                document.getElementById("lokasi").value = latitude + "," + longitude;

                let popup = L.popup()
                    .setLatLng([latitude, longitude])
                // .setContent("Kordinat : " + latitude + " - " + longitude)
                // .openOn(leafletMap);

                if (theMarker != undefined) {
                    leafletMap.removeLayer(theMarker);
                };
                theMarker = L.marker([latitude, longitude]).addTo(leafletMap);
            });

            const search = new GeoSearch.GeoSearchControl({
                provider: providerOSM,
                style: 'icon',
                searchLabel: 'Klik Pencarian Lokasi',
            });
            leafletMap.addControl(search);
        </script>
    </body>
@endsection