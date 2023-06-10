@extends('layouts.backend.main')

@section('title', 'Data Sampah')
@section('content')

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Sampah</h6>

            <div class="row">
                <div class="col offset-9">
                    <a href="{{ route('admin.kelolasampah.formtambah', ['id' => $bank->id]) }}" class="btn btn-primary mb-3">+
                        Tambah Data Sampah</a>
                </div>
            </div>
        </div>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col"> </th>
                            <th scope="col">Action</th>
                            <th scope="col"> </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($sampah as $sph)
                            <tr>
                                <td>{{ $sph->id }}</td>
                                <td>
                                    <div class="card" style="width: 10rem; heigh: 10rem; margin:5px">
                                        <img class="card-img-top" style="-o-object-fit: cover; width:10rem; height:10rem"
                                            src="{{ asset('storage/' . $sph->foto) }}" alt="Card-image cap">
                                </td>
                                <td>{{ $sph->nama }}</td>
                                <td>{{ $sph->harga }}</td>

                                <td>
                                    <a href="{{ route('admin.kelolasampah.detail', ['banksampah_id' => $sph->banksampahs_id, 'id' => $sph->id]) }}"
                                        class="btn btn-info">Detail</a>
                                </td>

                                <td>
                                    <a href="{{ route('admin.kelolasampah.formubah', ['banksampah_id' => $sph->banksampahs_id, 'id' => $sph->id]) }}"
                                        class="btn btn-warning">Ubah</a>
                                </td>

                                <td>
                                    <a href="{{ route('admin.kelolasampah.hapus', ['banksampah_id' => $sph->banksampahs_id, 'id' => $sph->id]) }}"
                                        class="btn btn-danger">Hapus</a>
                                </td>

                                {{-- <td><a
                                                    href="{{ route('admin.kelolasampah.detail', ['id' => $sph->id]) }}">Detail</a>
                                            </td>
                                            <td> <a
                                                    href="{{ route('admin.banksampah.formubah', ['id' => $banks->id]) }}">Ubah</a>
                                            </td>
                                            <td><a
                                                    href="{{ route('admin.banksampah.hapus', ['id' => $banks->id]) }}">Hapus</a>
                                            </td> --}}
                            </tr>
                            {{-- @endforeach --}}


                            {{-- @foreach ($sampah->chunk(3) as $chunk)
                                        <div class="card-group"> --}}
                            {{-- @foreach ($chunk as $sph)
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $sph->nama }}</h5>
                                                    <div class="card" style="width: 18rem; heigh: 18rem; margin:20px">
                                                        <img class="card-img-top"
                                                            style="-o-object-fit: cover; width:10rem; height:10rem"
                                                            src="{{ asset('storage/' . $sph->foto) }}" alt="Card-image cap">
                                                        <p>{{ $sph->harga }}</p>
                                                        <div>
                                                        </div>
                                                        <a
                                                            href="{{ route('admin.kelolasampah.detail', ['banksampah_id' => $sph->banksampahs_id, 'id' => $sph->id]) }}">Detail</a>
                                                        <a
                                                            href="{{ route('admin.kelolasampah.detail', ['banksampah_id' => $sph->banksampahs_id, 'id' => $sph->id]) }}">Ubah</a>
                                                    </div>
                                                </div>
                                            @endforeach --}}
            </div>
            @endforeach
            </tbody>
            </table>
        </div>
        </ul>

        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->

            <!-- Card Body -->

            {{-- <a href="{{ route('admin.datasampah') }}" button type="button"
                        class="btn btn-outline-secondary btn-sm">Kembali</button></a> --}}
        </div>
    </div>
@endsection
