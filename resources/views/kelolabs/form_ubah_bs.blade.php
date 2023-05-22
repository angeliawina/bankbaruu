@extends('layouts.backend.main')


@section('content')
    <div class="main-panel">
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->

                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="mt-4">
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

                                <div class="from-group">
                                    <label for="latitude">Latitude</label>
                                    <input class="form-control" type="text" name="latitude"
                                        value="{{ $bank->latitude }}">

                                </div>

                                <div class="form-group">
                                    <label for="longitude">Longitude</label>
                                    <input type="text" name="longitude" value="{{ $bank->longitude }}"
                                        class="form-control">
                                </div>

                                <input class="btn btn-primary"type="submit" value="Ubah">
                                <a href="{{ route('admin.banksampah') }}" class="btn btn-primary">Batal</a>
                            </form>

                        </div>
                    @endsection
