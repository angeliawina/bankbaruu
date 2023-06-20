@extends('layouts.frontend.main')

@section('content')

    <head>
        <!-- My CSS -->
        <link rel="stylesheet" href="{{ asset('css/css/style.css') }}" />
    </head>

    <section id="detail">
        <div class="container">
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <img src="{{ asset('storage/' . $bank->foto) }}" height="150px" width="150px">
                    </div>
                    <div class="col-10">
                        <br>
                        <h4>{{ $bank->nama }}</h4> <br>
                        <h6>Kecamatan: {{ $kecamatan->nama }}</h6>
                        <h6>Alamat: {{ $bank->alamat }}</h6>
                        <a href="https://goo.gl/maps/NJ6nSMrYqeSfw9xi7">
                            <h6 style="text-align: end">Rute
                                <i class="fas fa-map fa-1x text-gray-300"></i>
                            </h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h5>Data Sampah</h5>
                    </div>
                </div>

                <div class="row align-items-center">
                    @foreach ($sampah as $sph)
                        <div class="col-md-2 mb-3">
                            <div class="card">

                                <img class="card-img-top" style="-o-object-fit: cover; width:9rem; height:9rem"
                                    src="{{ asset('storage/' . $sph->foto) }}" alt="sampah">

                                <div class="card-body">
                                    <h6 class="card-title">{{ $sph->nama }} - </h6>
                                    <h6 class="card-title">Rp {{ $sph->harga }} </h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    @endsection
</section>
