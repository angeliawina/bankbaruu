@extends('layouts.backend.main')

@section('title', 'Data Banksampah')
@section('content')

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Banksampah</h6>

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
                            <th>Foto</th>
                            <th>Nama </th>
                            {{-- <th>Alamat</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bank as $banks)
                            <tr>
                                <td>{{ $banks->id }}</td>

                                <td>
                                    <div class="card" style="width: 10rem; heigh: 10rem; margin:10px">
                                        <img class="card-img-top" style="-o-object-fit: cover; width:10rem; height:10rem"
                                            src="{{ asset('storage/' . $banks->foto) }}" alt="Card-image cap">
                                </td>

                                <td>{{ $banks->nama }}</td>
                                {{-- <td>{{ $banks->alamat }}</td> --}}

                                <td>
                                    <a href="{{ route('admin.banksampah.detail', ['id' => $banks->id]) }}"
                                        class="btn btn-info">Detail</a>
                                    <a href="{{ route('admin.banksampah.formubah', ['id' => $banks->id]) }}"
                                        class="btn btn-warning">Ubah</a>
                                    <a href="{{ route('admin.banksampah.hapus', ['id' => $banks->id]) }}" class="btn btn-danger">Hapus</a>
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
