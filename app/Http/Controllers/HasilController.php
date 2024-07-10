<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function hasil()
    {
        $alternatifs = Alternatif::all();

        // Mendapatkan nilai maksimal dan minimal untuk masing-masing kriteria
        $maxC1 = Alternatif::max('C1');
        $minC2 = Alternatif::min('C2');
        $maxC3 = Alternatif::max('C3');
        $maxC4 = Alternatif::max('C4');
        $maxC5 = Alternatif::max('C5');

        // Bobot untuk masing-masing kriteria
        $bobotC1 = 0.10;
        $bobotC2 = 0.15;
        $bobotC3 = 0.20;
        $bobotC4 = 0.25;
        $bobotC5 = 0.30;

        // Normalisasi dan pembobotan
        foreach ($alternatifs as $item) {
            $item->normalisasiC1 = $item->C1 / $maxC1;
            $item->normalisasiC2 = $minC2 / $item->C2;
            $item->normalisasiC3 = $item->C3 / $maxC3;
            $item->normalisasiC4 = $item->C4 / $maxC4;
            $item->normalisasiC5 = $item->C5 / $maxC5;

            // Menghitung nilai SAW
            $item->normalized_saw =
                ($item->normalisasiC1 * $bobotC1) +
                ($item->normalisasiC2 * $bobotC2) +
                ($item->normalisasiC3 * $bobotC3) +
                ($item->normalisasiC4 * $bobotC4) +
                ($item->normalisasiC5 * $bobotC5);
        }

        return view('hasilHitung.hasil', [
            'alternatifs'  => $alternatifs,
            'title' => 'hasilHitung.hasil'
        ], compact('alternatifs'));
    }
}
