<?php

namespace App\Http\Controllers;

use App\Models\Banksampah;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class SigbsController extends Controller
{
    public function index()
    {
        $bank = Banksampah::all();
        $kecamatan = Kecamatan::all();
        return view('sigbs.index', compact('bank','kecamatan'));
    }

    function dataBS($id)
    {
        $bank = Banksampah::find($id);
        $kecamatan = Kecamatan::find($id);
        return view('sigbs.detail_bs', compact('bank','kecamatan'));
    }
}
