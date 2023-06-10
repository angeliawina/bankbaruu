@extends('layouts.backend.main')

@section('title', 'Form Ubah Kecamatan')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Tambah Kecamatan</h6>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.kelolakecamatan.ubah',['id' => $kecamatan->id]) }}" method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="from-group">
                            <input class="form-control" type="hidden" name="id" value="{{ $kecamatan->id }}">
                            <label for="nama">Nama Kecamatan</label>
                            <input class="form-control" type="text" name="nama" value="{{$kecamatan->nama}}">
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
