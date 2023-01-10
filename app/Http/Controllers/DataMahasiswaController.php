<?php

namespace App\Http\Controllers;

use App\Models\data_mahasiswa;
use Illuminate\Http\Request;

class DataMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_mahasiswa = data_mahasiswa::paginate(10);
        return response()->json([
            'data' => $data_mahasiswa
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_mahasiswa = data_mahasiswa::create([
            'nama' => $request->name,
            'prodi' => $request->prodi,
            'nim' => $request->nim,
            'alamat' => $request->alamat,
        ]);
        return response()->json([
            'data' => $data_mahasiswa
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\data_mahasiswa  $data_mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(data_mahasiswa $data_mahasiswa)
    {
        return response()->json([
            'data' => $data_mahasiswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\data_mahasiswa  $data_mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, data_mahasiswa $data_mahasiswa)
    {
        $data_mahasiswa->nama = $request->nama;
        $data_mahasiswa->prodi = $request->prodi;
        $data_mahasiswa->nim = $request->nim;
        $data_mahasiswa->alamat = $request->alamat;
        $customer->save();

        return response()->json([
            'data' => $data_mahasiswa
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\data_mahasiswa  $data_mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(data_mahasiswa $data_mahasiswa)
    {
        $data_mahasiswa->delete();
        $data_mahasiswa = data_mahasiswa::paginate(10);
        return response()->json([
            'message' => 'data mahasiswa deleted'
        ], 204);
    }
}
