<?php

namespace App\Http\Controllers\Ahp;

use App\Http\Controllers\Controller;
use App\Models\Ahp\BobotKriteria;
use App\Models\Ahp\Kriteria;
use App\Models\Ahp\NilaiUKM;
use App\Models\Ukm;
use Illuminate\Http\Request;

class AhpController extends Controller
{
    public function hitung()
    {
        // Ambil semua UKM
        $ukms = UKM::all();

        // Ambil semua kriteria dan bobotnya
        $kriteria = Kriteria::all();
        $bobotKriteria = BobotKriteria::all()->pluck('bobot', 'kriteria_id')->toArray();

        // Inisialisasi array untuk menyimpan nilai normalisasi
        $nilaiNormalisasi = [];

        // Hitung nilai normalisasi untuk setiap kriteria
        foreach ($kriteria as $k) {
            $nilaiKriteria = NilaiUKM::where('kriteria_id', $k->id)->get()->pluck('nilai', 'ukm_id')->toArray();
            $total = array_sum($nilaiKriteria);

            foreach ($nilaiKriteria as $ukm_id => $nilai) {
                $nilaiNormalisasi[$ukm_id][$k->id] = $nilai / $total;
            }
        }

        // Hitung nilai akhir untuk setiap UKM berdasarkan bobot kriteria
        $nilaiAkhir = [];
        foreach ($ukms as $ukm) {
            $ukmId = $ukm->id;
            $nilaiAkhir[$ukmId] = 0;

            foreach ($kriteria as $k) {
                $nilaiAkhir[$ukmId] += $nilaiNormalisasi[$ukmId][$k->id] * $bobotKriteria[$k->id];
            }
        }

        // Sorting nilai akhir untuk menentukan UKM terbaik
        arsort($nilaiAkhir);

        // Ambil nama UKM dari hasil perhitungan
        $hasil = [];
        foreach ($nilaiAkhir as $ukm_id => $nilai) {
            $hasil[] = [
                'ukm' => UKM::find($ukm_id)->nama_ukm,
                'nilai' => $nilai
            ];
        }

        // Return hasil sebagai view
        return view('com.ahp.hasil', ['hasil' => $hasil]);
    }
}
