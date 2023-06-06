@extends('layouts.frontend.main')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">List Bank Sampah</h1>
        <div class="row">
            <div class="col-lg-12">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->

                    <!-- Card Body -->
                    {{-- <a href="{{ route('admin.banksampah.formtambah') }}" class="btn btn-primary">+ Tambah Unit Bank Sampah</a> --}}
                    {{-- <ul>
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Bank Sampah</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Detail</th>
                                        <th scope="col">Ubah</th>
                                        <th scope="col">Hapus</th>
                                    </tr>
                                </thead>
                                {{-- <tbody>
                                    @foreach ($bank as $banks)
                                        <tr>
                                            <td>{{ $banks->id }}</td>
                                            <td>{{ $banks->nama }}</td>
                                            <td><a
                                                    href="{{ route('admin.banksampah.detail', ['id' => $banks->id]) }}">Detail</a>
                                            </td>
                                            <td> <a
                                                    href="{{ route('admin.banksampah.formubah', ['id' => $banks->id]) }}">Ubah</a>
                                            </td>
                                            {{-- <td><a
                                                    href="{{ route('admin.banksampah.hapus', ['id' => $banks->id]) }}">Hapus</a>
                                            </td> --}}
                    {{-- </tr>
                                    @endforeach
                                </tbody> --}}
                    </table>
                </div>
                {{-- </ul>  --}}
            </div>
        </div>
    </div>
    </div>
@endsection
