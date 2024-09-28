<?php

namespace App\Http\Controllers\Ahp;

use App\Http\Controllers\Controller;
use App\Models\Ahp\Kriteria;
use App\Models\Ahp\NilaiUKM;
use App\Models\Ukm;
use Illuminate\Http\Request;

class NilaiUKMController extends Controller
{
    public function index()
    {
        $kriteria = Kriteria::get();
        $nilai_ukm = Ukm::with('nilai.kriteria')->get();

        return view('admin.ahp.nilaiukm', compact('kriteria', 'nilai_ukm'));
    }

    public function add_nilai(Request $request)
    {
        $id_ukm = $request->id_ukm;
        $nilaikriteria = $request->nilaikriteria;

        foreach ($nilaikriteria as $kriteria_id => $nilai) {
            // Menyimpan data ke tabel nilai_ukm
            NilaiUKM::updateOrCreate(
                ['ukm_id' => $id_ukm,'kriteria_id' => $kriteria_id],
                ['nilai' => $nilai]
            );
        }

        return redirect('/spk')->with(['success'=>'Berhasil']);
    }
}
