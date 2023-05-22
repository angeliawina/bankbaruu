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
                    <h1 class="h3 mb-4 text-gray-800">Form Tambah Data Sampah</h1>
                    <form action="{{ route('admin.kelolasampah.tambah') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="from-group">
                            <input class="form-control" type="hidden" name="id" value="{{ $bank->id }}">
                            <label for="nama">Nama Sampah</label>
                            <input class="form-control" type="text" name="nama">

                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Sampah</label>
                            <input class="form-control" name="harga" id="" cols="30" rows="10">
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
                {{-- 
            </div>

        </div>

    </div> --}}

            </div>
        @endsection
