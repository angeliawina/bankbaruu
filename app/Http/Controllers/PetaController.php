<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetaController extends Controller
{
    public function map()
    {
        return view('pemetaan.map');
    }

    public function grid()
    {
        return view('pemetaan.gridcontent');
    }
}
