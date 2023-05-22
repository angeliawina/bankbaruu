@extends('layouts.backend.main')


@section('content')
    <div class="main-panel">
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->

                    <!-- Card Body -->
                    {{-- <div class="card-body"> --}}
                    <h1 class="h3 mb-4 text-gray-800">Form Tambah Unit Bank Sampah</h1>
                    <form action="{{ route('admin.banksampah.tambah') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="from-group">
                            <label for="nama">Nama Bank Sampah</label>
                            <input class="form-control" type="text" name="nama">

                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat Bank Sampah</label>
                            <input class="form-control" name="alamat" id="" cols="30" rows="10">
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto Bank Sampah</label>
                            <input type="file" name="foto" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="latitude">Latitude</label>
                            <input class="form-control" name="latitude" id="" cols="30" rows="10">
                        </div>
                        <div class="form-group">
                            <label for="longitude">Longitude</label>
                            <input class="form-control" name="longitude" id="" cols="30" rows="10">
                        </div>

                        {{-- peta --}}
                        <div>
                            <!DOCTYPE html>
                            <html lang="en">

                            <head>
                                <meta charset="UTF-8">
                                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>Peta Dasar Leaflet Js</title>

                                <style>
                                    #peta {
                                        height: 680px;
                                    }
                                </style>

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


                            </head>

                            <body>
                                <div id="peta"></div>

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
                                    }).setView([-0.0300733, 109.3257109], 13);

                                    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                        maxZoom: 19,
                                        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                                    }).addTo(leafletMap);

                                    let theMarker = {};

                                    leafletMap.on('click', function(e) {
                                        let latitude = e.latlng.lat.toString().substring(0, 15);
                                        let longitude = e.latlng.lng.toString().substring(0, 15);
                                        // document.getElementById("latitude").value = latitude;
                                        // document.getElementById("longitude").value = longitude;
                                        let popup = L.popup()
                                            .setLatLng([latitude, longitude])
                                            .setContent("Kordinat : " + latitude + " - " + longitude)
                                            .openOn(leafletMap);

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

                            </html>
                        </div>


                        <input class="btn btn-primary"type="submit" value="Simpan">
                        <a href="{{ route('admin.banksampah') }}" class="btn btn-primary">Batal</a>
                    </form>

                </div>

            </div>

        </div>

    </div>

    </div>
@endsection
