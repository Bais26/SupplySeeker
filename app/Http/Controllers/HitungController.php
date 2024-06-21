<?php

namespace App\Http\Controllers;

use App\Models\alternative;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class HitungController extends Controller
{
    public function hitungWP(Request $request)
{
    // Mendapatkan bobot dari kriteria
    $kriteria = Kriteria::pluck('bobot_kriteria', 'id')->all();

    // Mendapatkan semua alternatif
    $alternatifs = alternative::orderBy('nama_supplier', 'asc')->get();

    // Mendapatkan nilai normalisasi dari semua kriteria untuk setiap alternatif
   $alternatifValues = [];

foreach ($alternatifs as $alternatif) {
    $alternatifValues[$alternatif->id] = [
        'C1' => $alternatif->maxC1 - $alternatif->minC1 != 0 ? 
                ($alternatif->C1 - $alternatif->minC1) / ($alternatif->maxC1 - $alternatif->minC1) : 
                0,

        'C2' => $alternatif->maxC2 - $alternatif->minC2 != 0 ? 
                ($alternatif->C2 - $alternatif->minC2) / ($alternatif->maxC2 - $alternatif->minC2) : 
                0,

        'C3' => $alternatif->maxC3 - $alternatif->minC3 != 0 ? 
                ($alternatif->C3 - $alternatif->minC3) / ($alternatif->maxC3 - $alternatif->minC3) : 
                0,

        'C4' => $alternatif->maxC4 - $alternatif->minC4 != 0 ? 
                ($alternatif->C4 - $alternatif->minC4) / ($alternatif->maxC4 - $alternatif->minC4) : 
                0,

        'C5' => $alternatif->maxC5 - $alternatif->minC5 != 0 ? 
                ($alternatif->C5 - $alternatif->minC5) / ($alternatif->maxC5 - $alternatif->minC5) : 
                0,
    ];
}


    // Mendapatkan nilai WP untuk setiap alternatif
    $wpValues = [];
    foreach ($alternatifs as $alternatif) {
        $wp = 1;
        foreach ($kriteria as $kriteriaId => $bobot) {
            $wp *= pow($alternatifValues[$alternatif->id]['C' . $kriteriaId], $bobot);
        }
        $wpValues[$alternatif->id] = $wp;
    }

    // Mengurutkan alternatif berdasarkan nilai WP tertinggi ke terendah
    arsort($wpValues);

    // Ambil data kriteria minimal dan maksimal untuk digunakan di view
    $minMaxValues = [
        'C1min' => alternative::min('C1'),
        'C1max' => alternative::max('C1'),
        'C2min' => alternative::min('C2'),
        'C2max' => alternative::max('C2'),
        'C3min' => alternative::min('C3'),
        'C3max' => alternative::max('C3'),
        'C4min' => alternative::min('C4'),
        'C4max' => alternative::max('C4'),
        'C5min' => alternative::min('C5'),
        'C5max' => alternative::max('C5'),
    ];

    // Kirim data ke view
    return view('admin.hitung', compact('wpValues', 'alternatifs', 'minMaxValues'));
}

}
