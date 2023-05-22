<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Banksampah;
use App\Models\Sampah;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class SampahController extends Controller
{
    public function indexSampah()
    {
        $bank = Banksampah::all();
        
        return view('kelolasampah.index_sampah', compact('bank'));
    }

    public function dataSampah($id)
    {
        $bank = Banksampah::find($id);
        $sampah = Sampah::where('banksampah_id', $id)->get();
        return view('kelolasampah.data_sampah', compact('bank', 'sampah'));
    }

    public function FormTambahSampah($id)
    {
        $bank = Banksampah::find($id);
        return view('kelolasampah.form_tambah_sampah', compact('bank'));
    }

     /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function tambahSampah(Request $request)
    {
        try{
            $sampah = Banksampah::findOrFail($request->id);
            $imageName = Str::random(32).".".$request->foto->getClientOriginalExtension();

            $sampah = new Sampah();
            $sampah->banksampah_id = $request->id;
            $sampah->nama = $request->nama;
            $sampah->harga = $request->harga;
            $sampah->foto = $imageName;

            $sampah->save();

        //folder foto
        Storage::disk('public') -> put($imageName, file_get_contents($request->foto));
        $url = Storage::url("/storage/app/{$imageName}");
        $path = public_path($url);

        return redirect()->route( 'admin.kelolasampah.datasampah', ['id' => $request->id])->with('message','Berhasil Menambahkan!') ;

        }catch(\Exception $e) {
            return response() -> json([
                'message' => "something went really wrong"
            ],500);
    }
}

    public function detailSampah($banksampah_id, $sampah_id)
    {
        $sampah = Sampah::find($banksampah_id, $sampah_id);
        return view('kelolasampah.detail_sampah',compact('bank','sampah'));
    }    
            
}
    
