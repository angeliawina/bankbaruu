<?php

namespace App\Http\Controllers;

use App\Models\Banksampah;
use Illuminate\Http\Request;

class SigbsController extends Controller
{
    public function index()
    {
        $bank = Banksampah::all();
        return view('sigbs.index', compact('bank'));
    }
}
