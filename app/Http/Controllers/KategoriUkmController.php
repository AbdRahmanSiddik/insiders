<?php

namespace App\Http\Controllers;

use App\Models\KategoriUkm;
use Illuminate\Http\Request;

class KategoriUkmController extends Controller
{
    protected $kategoriUkm;

    public function __construct()
    {
        $this->kategoriUkm = new KategoriUkm();
    }

    public function index()
    {
        $kategoriUkms = $this->kategoriUkm->withCount('ukm')->get();

        return view('admin.kategori.ukm.ukm', compact('kategoriUkms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|unique:kategori_ukm'
        ], [
            'nama_kategori' => 'Nama Harus terisi / Nama sudah ada'
        ]);

        $nama_kategori = $request->nama_kategori;

        $data = [
            'nama_kategori' => $nama_kategori
        ];

        KategoriUkm::create($data);

        return redirect('/kategori/ukm')->with([
            'success' => 'Data '.$nama_kategori.' Berhasil ditambahkan'
        ]);
    }

    public function update(Request $request, $id)
    {
        $nama_kategori = $request->nama_kategori;

        $data = [
            'nama_kategori' => $nama_kategori
        ];

        KategoriUkm::where('id', $id)->update($data);

        return redirect('/kategori/ukm')->with([
            'success' => 'Data Berhasil diubah'
        ]);
    }

    public function destroy($id)
    {
        KategoriUkm::where('id', $id)->delete();

        return redirect('/kategori/ukm')->with([
            'success' => 'Data Berhasil dihapus'
        ]);
    }
}
