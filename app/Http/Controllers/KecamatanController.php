<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\json;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function index()
    {
        $kecamatan = Kecamatan::all();

        return view('kelolakecamatan.index', compact('kecamatan'));
    }

    public function formTambahKecamatan()
    {
        return view('kelolakecamatan.form_tambah_kecamatan');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function tambahKec(Request $request)
    {
        try {
            $geojson = Str::random(32) . "." . $request->data->getClientOriginalExtension();

            Kecamatan::create([
                'nama' => $request->nama,
                'data' => $geojson,
            ]);

            //folder geojson
            Storage::disk('public')->put($geojson, file_get_contents($request->data));
            $url = Storage::url("/storage/app/{$geojson}");
            $path = public_path($url);
            return redirect()->route('admin.datakecamatan')->with('message', 'Berhasil Menambahkan!');

            //respon
            return response()->json([
                'message' => "Berhasil Menambahkan",
                'data' => $path
            ], 200);




            //respon gagal
        } catch (\Exception $e) {
            return response()->json([
                'message' => "something went really wrong"
            ], 500);
        }

        $data = json_decode($geojson, true);
        dd($data);
    }

    public function detailKec($id)
    {
        $kecamatan = Kecamatan::find($id);
        return view('kelolakecamatan.detail_kec', compact('kecamatan'));
    }

    public function formUbahKec($id)
    {
        $kecamatan = Kecamatan::find($id);
        return view('kelolakecamatan.form_ubah_kecamatan', compact('kecamatan'));
    }

    public function ubahKec(Request $request, $id)
    {

        try {
            $kecamatan = Kecamatan::where('id', $id)->first();
            if (!$kecamatan) {
                return response()->json([
                    'message' => "Data tidak ditemukan"
                ], 404);
            }
            $geojson = Str::random(32) . "." . $request->data->getClientOriginalExtension();
            $kecamatan->nama = $request->nama;
            $kecamatan->data = $geojson;
            Storage::disk('public')->put($geojson, file_get_contents($request->data));
            $url = Storage::url("/storage/app/{$geojson}");
            $path = public_path($url);
            $kecamatan->save();
            return redirect()->route('admin.datakecamatan')->with('message', 'Berhasil Menambahkan!');

            //respon
            return response()->json([
                'message' => "Berhasil Menambahkan",
                'data' => $path
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => "Something went really wrong"
            ]);
        }
    }

    public function hapusKec($id)
    {

        $kecamatan = Kecamatan::find($id);
        if (!$kecamatan) {
            return response()->json([
                'message' => 'Kecamatan tidak ditemukan'
            ], 404);
        }
        $url = Storage::disk('public');
        if ($url->exists($kecamatan->data));
        $kecamatan->delete($kecamatan->data);
        $kecamatan->delete();
        return redirect()->route('admin.datakecamatan')->with('message', 'Berhasil Menghapus!');;
    }
}
