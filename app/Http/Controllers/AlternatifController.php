<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    public function index()
    {
        $alternatifs = Alternatif::all();
        return view('alternatif.dataAlternatif', [
            'alternatifs' => $alternatifs,
            'title' => 'dataAlternatif'
        ]);
    }

    public function create()
    {
        return view('alternatif.createAlternatif', [
            'title' => 'alternatif.createAlternatif'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'C1' => 'required',
            'C2' => 'required',
            'C3' => 'required',
            'C4' => 'required',
            'C5' => 'required',
        ]);

        Alternatif::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'C1' => $request->C1,
            'C2' => $request->C2,
            'C3' => $request->C3,
            'C4' => $request->C4,
            'C5' => $request->C5,
        ]);
        return redirect('/alternatif/createAlternatif')->with('status', 'Alternatif berhasil ditambahkan');
    }

    public function edit(int $id)
    {
        $alternatifs = Alternatif::findOrFail($id);

        return view('alternatif.editAlternatif', compact('alternatifs'), [
            'title' => 'alternatif.editAlternatif'
        ]);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'C1' => 'required',
            'C2' => 'required',
            'C3' => 'required',
            'C4' => 'required',
            'C5' => 'required'
        ]);

        Alternatif::findOrFail($id)->update([
            'nama_perusahaan' => $request->nama_perusahaan,
            'C1' => $request->C1,
            'C2' => $request->C2,
            'C3' => $request->C3,
            'C4' => $request->C4,
            'C5' => $request->C5
        ]);

        return redirect()->back()->with('status', 'Alternatif berhasil diupdate');
    }

    public function destroy(int $id)
    {
        $alternatifs = Alternatif::findOrFail($id);
        $alternatifs->delete();

        return redirect()->back()->with('status', 'Alteratif berhasil dihapus');
    }
}
