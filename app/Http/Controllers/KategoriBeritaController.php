<?php

namespace App\Http\Controllers;

use App\Models\KategoriBerita;
use Illuminate\Http\Request;

class KategoriBeritaController extends Controller
{
    protected $KategoriBerita;

    public function __construct()
    {
        $this->KategoriBerita = new KategoriBerita();
    }

    public function index()
    {
        $kategoriBeritas = $this->KategoriBerita->withCount('berita')->get();

        return view('admin.kategori.berita.berita', compact('kategoriBeritas'));
    }

    public function store(Request $request)
    {
        $kategori = $this->KategoriBerita;

        $request->validate([
            'nama_kategori' => 'required|unique:kategori_ukm'
        ], [
            'nama_kategori' => 'Nama Harus terisi / Nama sudah ada'
        ]);

        $nama_kategori = $request->nama_kategori;

        $data = [
            'nama_kategori' => $nama_kategori
        ];

        $kategori->create($data);

        return redirect('/kategori/berita')->with([
            'success' => 'Data '.$nama_kategori.' Berhasil ditambahkan'
        ]);
    }

    public function update(Request $request, $id)
    {
        $nama_kategori = $request->nama_kategori;

        $data = [
            'nama_kategori' => $nama_kategori
        ];

        KategoriBerita::where('id', $id)->update($data);

        return redirect('/kategori/berita')->with([
            'success' => 'Data Berhasil diubah'
        ]);
    }

    public function destroy($id)
    {
        KategoriBerita::where('id', $id)->delete();

        return redirect('/kategori/berita')->with([
            'success' => 'Data Berhasil dihapus'
        ]);
    }
}
