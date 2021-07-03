<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\DataRumah;

class DataRumahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::where('id_user', $id)->first();
        $data = DataRumah::where('id_mahasiswa', $mahasiswa->id)->first();

        $data_kurang = DataRumah::where('id_mahasiswa', $mahasiswa->id)->whereNull('kepemilikan_rumah')->first();
        return view('sidebar.data_rumah.index', compact('data', 'data_kurang'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data_rumah = DataRumah::find($id);

        $data = [
            'kepemilikan_rumah' => $request->kepemilikan_rumah,
            'thn_perolehan' => $request->thn_perolehan,
            'daya_listrik' => $request->daya_listrik,
            'luas_tanah_bangunan' => $request->luas_tanah_bangunan,
            'bahan_atap' => $request->bahan_atap,
            'bahan_lantai' => $request->bahan_lantai,
            'bahan_tembok' => $request->bahan_tembok,
            'aset_keluarga' => $request->aset_keluarga,
            'prestasi' => $request->prestasi,
        ];

        if ($file = $request->foto_rumah){

            if ($data_rumah->foto_rumah) {
                File::delete('Images/Mahasiswa/Foto_Rumah/' . $data_rumah->foto_rumah);
            }

            $nama_file = "Foto_rumah_".time(). ".jpeg";
            $file->move(public_path() . '/Images/Mahasiswa/Foto_Rumah/', $nama_file);  
            $data['foto_rumah'] = $nama_file;
        }

        $data_rumah->update($data);

        return back()->with('success', 'Berhasil Merperbarui Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
