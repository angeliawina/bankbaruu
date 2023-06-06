@extends('layouts.backend.main')

@section('title', 'Detail Kecamatan')
@section('content')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Web GIS</title>

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
            integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

        <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

        <style>
            #peta {
                height: 600px;
                width: 100%;
            }
        </style>
    </head>

    <body>
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Kecamatan : {{ $kecamatan->nama }} </h6>
                    </div>

                    <div class="card-body">
                        <div id="peta"></div>
                    </div>
                </div>
            </div>
    </body>

    <script>
        var map = L.map('peta').setView([-0.02609145152236862, 109.3401256150223], 13);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        var polygon = L.polygon([
            [-0.02225640658564864, 109.33159383999782],
            [-0.02316677842425604, 109.30980560646184],
            [-0.03882517293858486, 109.31065528687829],
            [-0.041374213662473375, 109.34033340999554]
        ]).addTo(map);
    </script>


@endsection
