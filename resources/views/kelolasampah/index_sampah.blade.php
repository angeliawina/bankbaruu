@extends('layouts.backend.main')

@section('title', 'List Banksampah')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Banksampah</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">


                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Banksampah</th>
                            <th>Data Sampah</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bank as $banks)
                            <tr>
                                <td>{{ $banks->id }}</td>
                                <td>{{ $banks->nama }}</td>
                                <td><a href="{{ route('admin.kelolasampah.datasampah', ['id' => $banks->id]) }}"
                                        class="btn btn-info">Lihat
                                        Data</a>
                                    {{-- ['id' => $banks->id] --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
