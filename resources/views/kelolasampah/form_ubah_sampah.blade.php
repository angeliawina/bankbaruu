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
                            <h1 class="h3 mb-4 text-gray-800">Form Edit Sampah</h1>
                            <form
                                action="{{ route('admin.kelolasampah.ubah', ['banksampah_id' => $sampah->banksampahs_id, 'id' => $sampah->id]) }}"
                                {{-- action="{{ route('admin.kelolasampah.ubah', ['banksampah_id' => $sampah->banksampahs_id, 'id' => $sampah->id]) }}" --}} method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="from-group">
                                    <input class="form-control" type="hidden" name="id" value="{{ $sampah->id }}">
                                    <input class="form-control" type="hidden" name="banksampahs_id"
                                        value="{{ $sampah->banksampahs_id }}">
                                    <label for="nama">Nama Sampah</label>
                                    <input class="form-control" type="text" name="nama" value="{{ $sampah->nama }}">

                                </div>

                                <div class="from-group">
                                    <label for="alamat">Harga Sampah</label>
                                    <input class="form-control" type="text" name="harga" value="{{ $sampah->harga }}">

                                </div>

                                <div class="form-group">
                                    <label for="foto">Foto Sampah</label>
                                    <input type="file" name="foto" class="form-control">
                                </div>


                                <input class="btn btn-primary"type="submit" value="Simpan">
                                <a href="{{ route('admin.kelolasampah.datasampah', ['id' => $bank->id]) }}"
                                    class="btn btn-primary">Batal</a>
                            </form>

                        </div>
                    @endsection
