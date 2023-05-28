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
        $sampah = Sampah::where('banksampahs_id', $id)->get();
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
            $sampah->banksampahs_id = $request->id;
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

    public function formUbahSampah($banksampah_id, $id)
    {
        $bank = Banksampah::where('id', $banksampah_id)->first();
        $sampah = $bank->sampahs()->where('id', $id)->first();
        return view('kelolasampah.form_ubah_sampah', compact('bank', 'sampah'));
    }

    public function ubahSampah(Request $request, $banksampah_id, $id)
    {
        try{
            $bank = Banksampah::where('id', $banksampah_id)->first();
            $sampah = $bank->sampahs()->where('id', $id)->first();
        if(!$sampah){
            return response()->json([
                'message' => 'Data tidak ditemukan'
            ],404);
        }
$imageName = Str::random(32).".".$request->foto->getClientOriginalExtension();
    $sampah->banksampahs_id = $request->banksampahs_id;
    $sampah->nama = $request->nama;
    $sampah->harga = $request->harga;
    $sampah->foto = $imageName;
    
    if($request->foto){
        $storage = Storage::disk('public');
        //hapus foto lama
        if ($storage->exists($sampah->foto))
        $storage->delete($sampah->foto);

        //nama foto
        $imageName = Str::random(32).".".$request->foto->getClientOriginalExtension();
        $sampah->foto = $imageName;

        //save foto
        $storage->put($imageName, file_get_contents($request->foto));
    }

    //update foto
    $sampah->save();

    //respon
     return view('kelolasampah.detail_sampah', compact('bank','sampah'))
     ->with('message','Berhasil Mengupdate!');
;
    // return redirect()->route('admin.kelolasampah.detail',['banksampah_id'=>$sampah->banksampah_id, 'id'=>$sampah->id])->with('message','Berhasil Mengupdate!');
        }catch(\Exception $e){
    return response()->json([
        'message' => "Something went really wrong"
    ]);
}}



    public function detailSampah($banksampah_id, $id)
    {
        $bank = Banksampah::where('id', $banksampah_id)->first();
        $sampah = $bank->sampahs()->where('id', $id)->first();
        return view('kelolasampah.detail_sampah',compact('bank','sampah'));
    }    
            
}
    
