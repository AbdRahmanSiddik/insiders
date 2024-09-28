<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\KategoriBerita;
use App\Models\KategoriUkm;
use App\Models\Ukm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AdminController extends Controller
{
    public function index()
    {
        $visitorCount = Cache::get('visitor_count', 0);
        
        $data = [
            'ukm_aktif' => Ukm::where('status_ukm', 1)->count(),
            'ukm_non_aktif' => Ukm::where('status_ukm', 0)->count(),
            'berita_posted' => Berita::where('status_post', 1)->count(),
            'berita_non_posted' => Berita::where('status_post', 0)->count(),
            'kategori_ukm_jumlah' => KategoriUkm::get()->count(),
            'kategori_berita_jumlah' => KategoriBerita::get()->count(),
        ];

        return view('admin.dashboard', $data);
    }
}
