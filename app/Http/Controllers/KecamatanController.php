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
        try{
            $geojson = Str::random(32).".".$request->data->getClientOriginalExtension();

            Kecamatan::create([
                'nama'=>$request->nama,
                'data'=>$geojson,
            ]);

            //folder geojson
            Storage::disk('public') -> put($geojson, file_get_contents($request->data));
            $url = Storage::url("/storage/app/{$geojson}");
            $path = public_path($url);
            return redirect()->route('admin.datakecamatan')->with('message','Berhasil Menambahkan!');

            //respon
            return response()->json([
                'message' => "Berhasil Menambahkan",
                'data' => $path
            ],200);

            


            //respon gagal
        }catch(\Exception $e) {
            return response() -> json([
                'message' => "something went really wrong"
            ],500);
        }

        $data = json_decode($geojson, true);
            dd($data);
    }

}
