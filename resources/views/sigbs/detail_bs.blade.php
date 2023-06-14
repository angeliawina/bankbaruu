@extends('layouts.frontend.main')

@section('content')
    <div class="container-fluid">

        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Detail Bank Sampah</h1>
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->

                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">


                            <div class="col-1">
                                <img src="{{ asset('storage/' . $bank->foto) }}" height="100px" width="100px">
                            </div>
                            <div class="col-11">
                                <br>
                                <h4>{{ $bank->nama }}</h4> <br>
                                <h6>Kecamatan: {{ $kecamatan->nama }}</h6>
                                <h6>Alamat: {{ $bank->alamat }}</h6>


                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col text-center">
                                <h5>Data Sampah</h5>
                            </div>


                            {{-- @foreach ($sampah as $sph)
                                <div class="col-md-4 mb-3">
                                    <div class="card">

                                        <img class="card-img-top" style="-o-object-fit: cover; width:20rem; height:20rem"
                                            src="{{ asset('storage/' . $sph->foto) }}" alt="sampah">

                                        <div class="card-body">
                                            <h6 class="card-title">{{ $sph->nama }} </h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach --}}
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col">
                                    data 1
                                </div>


                                <div class="col">
                                    data 1
                                </div>
                                <div class="col">
                                    data 1
                                </div>
                                <div class="col">
                                    data 1
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
