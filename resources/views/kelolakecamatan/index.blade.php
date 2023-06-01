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

        <!-- leafletjs AJAX-->
        {{-- <script src="htdocs/webmap101/leaflet.ajax.min.js" type="text/javascript"></script> --}}

        <!-- jQuery library -->

        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}

        <script src="geosearch/src/js/l.control.geosearch.js"></script>
        <script src="geosearch/src/js/l.geosearch.provider.google.js"></script>

        <!-- leafletjs AJAX-->
        <script src="htdocs/webmap101/leaflet.ajax.min.js" type="text/javascript"></script>

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

        <div class="container-fluid">

            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">List Kecamatan</h1>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Dropdown Card Example -->
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->

                        <!-- Card Body -->
                        {{-- <a href="{{ route('admin.banksampah.formtambah') }}" --}}

                        <a href="{{ route('admin.kelolakecamatan.formtambah') }}" class="btn btn-primary">+ Tambah Data
                            Kecamatan</a>


                        <ul>
                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID Kecamatan</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Detail</th>
                                            <th scope="col">Ubah</th>
                                            <th scope="col">Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kecamatan as $kec)
                                            <tr>
                                                <td>{{ $kec->id }}</td>
                                                <td>{{ $kec->nama }}</td>
                                                <td>{{ $kec->data }}</td>
                                                <td><a
                                                        href="{{ route('admin.banksampah.detail', ['id' => $kec->id]) }}">Detail</a>
                                                </td>
                                                <td> <a
                                                        href="{{ route('admin.banksampah.formubah', ['id' => $kec->id]) }}">Ubah</a>
                                                </td>
                                                {{-- <td><a
                                                        href="{{ route('admin.banksampah.hapus', ['id' => $kec->id]) }}">Hapus</a>
                                                </td> --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </ul>

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-9" id="peta"></div>
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
            }).setView([-0.0300733, 109.3257109], 12);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(leafletMap);

            @foreach ($kecamatan as $kec)
                var geojsonLayer = new L.GeoJSON.AJAX([{{ $kec->data }}], {
                    style: style,
                    onEachFeature: onEachFeature,
                    onEachFeature: popUp,

                });
                geojsonLayer.on('data:loaded', function() {
                    geojsonLayer.addTo(leafletMap);
                });
            @endforeach

            // @foreach ($kecamatan as $kec)

            //     $.getJSON(
            //         [{{ $kec->data }}]
            //     ).addTo(leafletMap)

            //     geoLayer = L.geoJson([{{ $kec->data }}]).bindPopup('Nama' = $kec - > nama)
            // @endforeach

            // @foreach ($kecamatan as $kec)
            //     $.getJSON([{{ $kec->data }}], function(data) {
            //         geoLayer = L.geoJson(data, {
            //             style: function(feature) {

            //                 return {
            //                     fillOpacity: 0.5,
            //                     weight: 5
            //                     opacity: 1
            //                     color: "red"
            //                 };
            //             },

            //             onEachFeature: function(feature, layer) {
            //                 layer.addTo(leafletMap).bindPopup("{{ $kec->nama }}")
            //             }
            //         })
            //     })
            // @endforeach

            // @foreach ($kecamatan as $kec)
            //     geoLayer = L.geoJson([{{ $kec->data }}]).addTo(leafletMap).bindPopup("{{ $kec->nama }}")
            // @endforeach

            const search = new GeoSearch.GeoSearchControl({
                provider: providerOSM,
                style: 'icon',
                searchLabel: 'Klik Pencarian Lokasi',
            });
            leafletMap.addControl(search);
        </script>
    </body>
@endsection
