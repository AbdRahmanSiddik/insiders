<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Ukm;
use App\Models\KategoriBerita;
use App\Models\KategoriUkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ComController extends Controller
{
    public function index()
    {
        $jumlah_ukm = Ukm::where('status_ukm', 1)->count();
        $visitorCount = Cache::get('visitor_count', 0);
        $jumlah_berita = Berita::where('status_post', 1)->count();

        $latestUkm = UKM::orderBy('created_at', 'desc')->take(3)->get();
        $latestBerita = Berita::orderBy('created_at', 'desc')->take(1)->first();
        $latestBerita_2 = Berita::orderBy('created_at', 'desc')->skip(1)->take(2)->get();

        return view('com.landing', compact('jumlah_ukm', 'visitorCount', 'jumlah_berita', 'latestUkm', 'latestBerita', 'latestBerita_2'));
    }

    public function berita()
    {
        $informasi = Berita::get();
        $id = 0;
        $kategori = KategoriBerita::where('id', 1)->first();
        $recent = Berita::latest('created_at')->take(3)->get();
        $kategoris = KategoriBerita::get();
        $ukms = Ukm::get();

        return view('com.berita.view', compact('informasi', 'kategori', 'id',  'ukms', 'recent', 'kategoris'));
    }

    public function view_berita($id)
    {
        $kategori = KategoriBerita::where('id', $id)->first();

        $berita = KategoriBerita::where('id', $id)->first();

        $informasi = $berita->berita;

        $recent = Berita::latest('created_at')->take(3)->get();
        $kategoris = KategoriBerita::get();
        $ukms = Ukm::get();

        return view('com.berita.view', compact('informasi', 'kategori', 'id', 'ukms', 'recent', 'kategoris'));
    }

    public function detail_berita($token)
    {
        $detail = Berita::where('token_berita', $token)->first();
        $recent = Berita::latest('created_at')->take(3)->get();
        $kategori = KategoriBerita::get();
        $ukms = Ukm::get();

        return view('com.berita.detail', compact('detail', 'recent', 'kategori', 'ukms'));
    }

    public function ukm()
    {
        $ukms = Ukm::get();
        $id = 0;
        $kategori = KategoriUkm::where('id', 1)->first();

        return view('com.ukm.view', compact('ukms', 'kategori', 'id'));
    }

    public function view_ukm($id)
    {
        $informasi = KategoriUkm::where('id', $id)->first();
        $kategori = KategoriUkm::where('id', $id)->first();
        $ukms = $informasi->ukm;

        return view('com.ukm.view', compact('ukms', 'kategori', 'id'));
    }

    public function detail_ukm($id)
    {
        $detail = Ukm::where('token_ukm', $id)->first();
        return view('com.ukm.detail', compact('detail'));
    }

    public function galeri()
    {
        $galeris = Galeri::join('ukm', 'galeri.id_ukm', '=', 'ukm.id')->get();

        return view('com.galeri', compact('galeris'));
    }

    public function galeri_detail($token)
    {
        $detail = Galeri::where('token_galeri', $token)
        ->join('ukm', 'galeri.id_ukm', '=', 'ukm.id')->first();

        $recent = Galeri::join('ukm', 'galeri.id_ukm', '=', 'ukm.id')
        ->latest('galeri.created_at')->take(3)->get();
        
        return view('com.galeri_detail', compact('detail', 'recent'));
    }

}
