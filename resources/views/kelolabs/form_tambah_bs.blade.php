@extends('layouts.backend.main')

@section('title', 'Form Tambah Banksampah')
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
                height: 500px;
                width: 100%;
            }
        </style>
    </head>

    <body>

        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Form Tambah Banksampah</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.banksampah.tambah') }}" method="post" enctype="multipart/form-data">

                            @csrf
                            <div class="from-group">
                                <label for="nama">Nama Bank Sampah</label>
                                <input class="form-control" type="text" name="nama" id="" cols="30"
                                    rows="10">
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat Bank Sampah</label>
                                <input class="form-control" name="alamat" id="" cols="30" rows="10">
                            </div>

                            <div class="form-group">
                                <label>Kecamatan</label>
                                <select for="id" name="id" class="form-control", value=>
                                    @foreach ($kecamatan as $kec)
                                        <option value="{{ $kec->id }}">{{ $kec->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="foto">Foto Bank Sampah</label>
                                <input type="file" name="foto" class="form-control">
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="latitude">Latitude</label>
                                    <input class="form-control" type="text" name="latitude" id="latitude" cols="30"
                                        rows="10"{{-- disabled value="" --}}>

                                    <label for="longitude">Longitude</label>
                                    <input class="form-control" type="text" name="longitude" id="longitude"
                                        cols="30" rows="10"{{-- disabled value="" --}}>

                                    <label for="longitude">Lokasi</label>
                                    <input class="form-control" name="lokasi" id="lokasi" disabled value=""
                                        cols="30" rows="10">

                                    <div>
                                        <p> </p>
                                    </div>
                                    <input class="btn btn-primary"type="submit" value="Simpan">
                                    <a href="{{ route('admin.banksampah') }}" class="btn btn-primary">Batal</a>

                                </div>

                                <div class="col">
                                    <div id="peta">
                                    </div>
                                </div>
                                {{-- <div class="container" id="peta"></div> --}}
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
            }).setView([-0.0300733, 109.3257109], 13);

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
