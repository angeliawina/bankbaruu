@extends('layouts.frontend.main')


@section('content')

    <head>
        <!-- My CSS -->
        <link rel="stylesheet" href="{{ asset('css/css/style.css') }}" />
    </head>

    <!-- Banksampah -->
    <section id="banksampah">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2>Banksampah</h2>
                </div>
            </div>

            <div class="row align-items-center">
                @foreach ($bank as $banks)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <a href="{{ route('sigbs.dataBS', ['id' => $banks->id]) }}">
                                <img class="card-img-top" style="-o-object-fit: cover; width:20rem; height:20rem"
                                    src="{{ asset('storage/' . $banks->foto) }}" alt="banksampah"></a>

                            <div class="card-body">
                                <h6 class="card-title">{{ $banks->nama }} </h6>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffff" fill-opacity="10000000"
                d="M0,96L18.5,112C36.9,128,74,160,111,197.3C147.7,235,185,277,222,250.7C258.5,224,295,128,332,90.7C369.2,53,406,75,443,85.3C480,96,517,96,554,80C590.8,64,628,32,665,69.3C701.5,107,738,213,775,224C812.3,235,849,149,886,128C923.1,107,960,149,997,165.3C1033.8,181,1071,171,1108,144C1144.6,117,1182,75,1218,58.7C1255.4,43,1292,53,1329,80C1366.2,107,1403,149,1422,170.7L1440,192L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- End Banksampah -->
@endsection
