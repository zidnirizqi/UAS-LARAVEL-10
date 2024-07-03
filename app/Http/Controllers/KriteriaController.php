<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index()
    {
        $criterias = Criteria::all();
        return view('kriteria.dataKriteria', [
            'criterias' => $criterias,
            'title' => 'dataKriteria'
        ]);
    }

    public function create()
    {
        return view('kriteria.createKriteria', [
            'title' => 'kriteria.createKriteria'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kriteria' => 'required',
            'kode_kriteria' => 'required',
            'bobot' => 'required',
            'tipe' => 'required'
        ]);

        Criteria::create([
            'nama_kriteria' => $request->nama_kriteria,
            'kode_kriteria' => $request->kode_kriteria,
            'bobot' => $request->bobot,
            'tipe' => $request->tipe
        ]);

        return redirect('/kriteria/createKriteria')->with('status', 'Kriteria berhasil ditambahkan');
    }

    public function edit(int $id)
    {
        $criteria = Criteria::findOrFail($id);

        return view('kriteria.editKriteria', compact('criteria'), [
            'title' => 'kriteria.editKriteria'
        ]);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'nama_kriteria' => 'required',
            'kode_kriteria' => 'required',
            'bobot' => 'required',
            'tipe' => 'required'
        ]);

        Criteria::findOrFail($id)->update([
            'nama_kriteria' => $request->nama_kriteria,
            'kode_kriteria' => $request->kode_kriteria,
            'bobot' => $request->bobot,
            'tipe' => $request->tipe
        ]);

        return redirect()->back()->with('status', 'Kriteria berhasil diupdate');
    }

    public function destroy(int $id)
    {
        $criteria = Criteria::findOrFail($id);
        $criteria->delete();

        return redirect()->back()->with('status', 'Kriteria berhasil dihapus');
    }
}
