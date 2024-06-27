<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;
use App\Http\Requests\StoreKriteriaRequest;
use App\Http\Requests\UpdateKriteriaRequest;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $criterias = Kriteria::all();
        return view('/kriteria/dataKriteria', [
            'criterias' => $criterias,
            'title' => '/kriteria/dataKriteria'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/kriteria/create', [
            'title' => '/kriteria/create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kriteria' => 'required',
            'kode_kriteria' => 'required',
            'bobot' => 'required',
            'tipe' =>  'required'
        ]);

        Kriteria::create([
            'nama_kriteria' => $request->nama_kriteria,
            'kode_kriteria' => $request->kode_kriteria,
            'bobot' => $request->bobot,
            'tipe' => $request->tipe
        ]);

        return redirect('kategori/create')->with('status','berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kriteria $kriteria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kriteria $kriteria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKriteriaRequest $request, Kriteria $kriteria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kriteria $kriteria)
    {
        //
    }
}
