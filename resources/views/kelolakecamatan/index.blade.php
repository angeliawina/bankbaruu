@extends('layouts/backend/main')

@section('title', 'Kelola Kecamatan')

@section('content')

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Kecamatan</h6>

            <div class="row">
                <div class="col offset-9">
                    <a href="{{ route('admin.kelolakecamatan.formtambah') }}" class="btn btn-primary mb-3">+ Tambah Data
                        Kecamatan</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">


                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Kecamatan</th>
                            <th>Data</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kecamatan as $kec)
                            <tr>
                                <td>{{ $kec->id }}</td>
                                <td>{{ $kec->nama }}</td>
                                <td>{{ $kec->data }}</td>
                                <td>
                                    <a href="{{ route('admin.kelolakecamatan.detail', ['id' => $kec->id]) }}"
                                        class="btn btn-info">Detail</a>
                                    <a href="{{ route('admin.datakecamatan') }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('admin.datakecamatan') }}" class="btn btn-danger">Hapus</a>
                                </td>
                                {{-- <td><a
                                                        href="{{ route('admin.banksampah.hapus', ['id' => $kec->id]) }}">Hapus</a>
                                                </td> --}}
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
