@extends('layouts.backend.main')

@section('content')
    <div class="container-fluid">

        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Detail Sampah</h1>
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->

                    <!-- Card Body -->
                    <div class="card-body">
                        Nama: {{ $sampah->nama }} <br />
                        Harga: {{ $sampah->harga }}<br />
                        <img src="{{ asset('storage/' . $sampah->foto) }}" height="300px" width="300px">
                    </div>
                    <a href="{{ route('admin.kelolasampah.datasampah', ['banksampah_id' => $banksampah->id, 'sampah_id' => $sampah->id]) }}"
                        class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
