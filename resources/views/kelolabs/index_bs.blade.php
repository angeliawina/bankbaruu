@extends('layouts.backend.main')

@section('title', 'List Banksampah')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Banksampah</h6>

            <div class="row">
                <div class="col offset-9">
                    <a href="{{ route('admin.banksampah.formtambah') }}" class="btn btn-primary mb-3">+ Tambah Unit
                        Banksampah</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">


                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama </th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bank as $banks)
                            <tr>
                                <td>{{ $banks->id }}</td>
                                <td>{{ $banks->nama }}</td>
                                <td>{{ $banks->foto }}</td>
                                <td>
                                    <a href="{{ route('admin.banksampah.detail') }}" class="btn btn-info">Detail</a>
                                    <a href="{{ route('admin.banksampah.formubah') }}" class="btn btn-warning">Ubah</a>
                                    <a href="{{ route('admin.banksampah') }}" class="btn btn-danger">Hapus</a>
                                </td>

                                {{-- <td><a
                                                    href="{{ route('admin.banksampah.hapus', ['id' => $banks->id]) }}">Hapus</a>
                                            </td> --}}
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
