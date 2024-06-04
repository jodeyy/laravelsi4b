<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::all(); // select * from mahasiswa
        return view('Mahasiswa.index')
                ->with('mahasiswas', $mahasiswas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'npm'=> "required",
            'nama'=> "required|unique:mahasiswas",
            'tempat_lahir'=> "required",
            'tanggal_lahir'=>  "required",
            'alamat'=>  "required"
           ]);

           
       Mahasiswa::create($val);

       return redirect()->route('mahasiswa.index')->with('success',$val['nama'].' berhasil disimpan');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
