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
}
