<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Panggil model Prodi
        $result = Prodi::all();

        // Kirim data $result ke views prodi/index.blade.php
        return view('prodi.index')->with('prodi', $result);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fakultas = Fakultas::all();
        return view('prodi.create')->with('fakultas', $fakultas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi input
        $input = $request->validate([
            "nama"          => "required|unique:prodis",
            "kaprodi"       => "required",
            "singkatan"     => "required",
            "fakultas_id"   => "required"
        ]);

        // simpan
        Prodi::create($input);

        // redirect beserta pesan success
        return redirect()->route('prodi.index')->with('success', $request->nama.' berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $prodi = Prodi::find($id);
        $fakultas = Fakultas::all();
        return view('prodi.edit')
                    ->with('prodi', $prodi)
                    ->with('fakultas', $fakultas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $prodi = Prodi::find($id);

        // validasi input
        $input = $request->validate([
            "nama"          => "required",
            "kaprodi"       => "required",
            "singkatan"     => "required",
            "fakultas_id"   => "required"
        ]);

        // simpan
        $prodi->update($input);

        // redirect beserta pesan success
        return redirect()->route('prodi.index')->with('success', $request->nama.' berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        //
    }

    public function getProdi(){
        // $response['data'] = Prodi::all();
        $response['data'] = Prodi::with('fakultas')->get();
        $response['message'] = 'List data program studi';
        $response['success'] = true;

        return response()->json($response, 200);
    }
}
