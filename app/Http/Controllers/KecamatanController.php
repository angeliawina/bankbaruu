<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function index()
    {
        return view('kelolakecamatan.index');
    }

    public function formTambahKecamatan()
    {
        return view('kelolakecamatan.form_tambah_kecamatan');
    }

}
