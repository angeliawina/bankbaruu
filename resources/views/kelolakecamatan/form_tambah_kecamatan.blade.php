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
                    <h1 class="h3 mb-4 text-gray-800">Form Tambah Data Kecamatan</h1>
                    <form action="{{ route('admin.kelolakecamatan.tambah') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="from-group">
                            <label for="nama">Nama Kecamatan</label>
                            <input class="form-control" type="text" name="nama">

                        </div>
                        <div class="form-group">
                            <label for="data">Geojson Kecamatan</label>
                            <input type="file" name="data" class="form-control">
                        </div>

                        <input class="btn btn-primary"type="submit" value="Simpan">
                        <a href="{{ route('admin.datakecamatan') }}" class="btn btn-primary">Batal</a>
                    </form>

                </div>

            </div>

        </div>

    </div>
@endsection
