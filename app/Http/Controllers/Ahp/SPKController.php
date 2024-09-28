<?php

namespace App\Http\Controllers\Ahp;

use App\Http\Controllers\Controller;
use App\Models\Ahp\Kriteria;
use App\Models\Ahp\NilaiUKM;
use App\Models\Ukm;
use Illuminate\Http\Request;

class SPKController extends Controller
{
    public function preferences()
    {
        $kriteria = Kriteria::all();
        return view('com.student.preferences', ['kriteria' => $kriteria]);
    }

    public function recommendations(Request $request)
    {
        $preferences = $request->preferences;

        $ukms = UKM::all();
        $kriteria = Kriteria::all();
        $bobotKriteria = Kriteria::all()->pluck('bobot', 'id')->toArray();

        // Normalisasi nilai UKM berdasarkan kriteria
        $nilaiNormalisasi = [];
        foreach ($kriteria as $k) {
            $nilaiKriteria = NilaiUKM::where('kriteria_id', $k->id)->get()->pluck('nilai', 'ukm_id')->toArray();
            $total = array_sum($nilaiKriteria);

            foreach ($nilaiKriteria as $ukm_id => $nilai) {
                $nilaiNormalisasi[$ukm_id][$k->id] = $nilai / $total;
            }
        }

        // Hitung nilai akhir untuk setiap UKM berdasarkan preferensi pengguna
        $nilaiAkhir = [];
        foreach ($ukms as $ukm) {
            $ukmId = $ukm->id;
            $nilaiAkhir[$ukmId] = 0;

            foreach ($kriteria as $k) {
                $nilaiAkhir[$ukmId] += $nilaiNormalisasi[$ukmId][$k->id] * $preferences[$k->id];
            }
        }

        // Sorting nilai akhir untuk menentukan UKM terbaik
        arsort($nilaiAkhir);

        // Ambil nama UKM dari hasil perhitungan
        $hasil = [];
        foreach ($nilaiAkhir as $ukm_id => $nilai) {
            $hasil[] = [
                'ukm_id' => UKM::find($ukm_id)->nama_ukm,
                'nilai' => $nilai
            ];
        }

        return view('com.student.recommendations', ['hasil' => $hasil]);
    }
}
