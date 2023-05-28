@extends('layouts.backend.main')

@section('content')
    <div class="container-fluid">

        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">List Sampah</h1>
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->

                    <!-- Card Body -->
                    <a href="{{ route('admin.kelolasampah.formtambah', ['id' => $bank->id]) }}"
                        class="btn btn-primary float">+
                        Tambah Data Sampah</a>
                    <ul>
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
                                                <div class="card" style="width: 18rem; heigh: 18rem; margin:10px">
                                                    <img class="card-img-top"
                                                        style="-o-object-fit: cover; width:10rem; height:10rem"
                                                        src="{{ asset('storage/' . $sph->foto) }}" alt="Card-image cap">
                                            </td>
                                            <td>{{ $sph->nama }}</td>
                                            <td>{{ $sph->harga }}</td>

                                            <td>
                                                <a
                                                    href="{{ route('admin.kelolasampah.detail', ['banksampah_id' => $sph->banksampahs_id, 'id' => $sph->id]) }}">Detail</a>
                                            </td>

                                            <td>
                                                <a
                                                    href="{{ route('admin.kelolasampah.formubah', ['banksampah_id' => $sph->banksampahs_id, 'id' => $sph->id]) }}">Ubah</a>
                                            </td>

                                            <td>
                                                <a
                                                    href="{{ route('admin.kelolasampah.detail', ['banksampah_id' => $sph->banksampahs_id, 'id' => $sph->id]) }}">Hapus</a>
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
        </div>
    </div>
@endsection
