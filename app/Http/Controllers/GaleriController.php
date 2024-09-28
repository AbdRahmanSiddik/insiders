<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Galeri;
use App\Models\Ukm;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::join('ukm', 'galeri.id_ukm', '=', 'ukm.id')->get();

        return view('admin.galeri.galeri', compact('galeris'));
    }

    public function create()
    {
        $ukms = Ukm::get();

        return view('admin.galeri.galeri_add', compact('ukms'));
    }

    public function store(Request $request)
    {
        $token = uniqid(10);
        $token_galeri = Str::random(13);
        $file = $request->file('gambar_galeri');
        $nama = $request->nama_galeri;
        $id_ukm = $request->id_ukm;
        $deskripsi = $request->deskripsi_galeri;

        $file_name = $token.'.'.$file->getClientOriginalExtension();

        $data = [
            'token_galeri' => $token_galeri,
            'id_ukm' => $id_ukm,
            'nama_galeri' => $nama,
            'gambar_galeri' => $file_name,
            'deskripsi_galeri' => $deskripsi,
        ];

        Galeri::create($data);
        $file->move('image/galeri', $file_name);

        $jumlah_galeri = Galeri::where('id_ukm', $id_ukm)->count();
        Alternatif::where('id_ukm', $id_ukm)->update(['jumlah_prestasi' => $jumlah_galeri]);

        return redirect('/admin/galeri')->with([
            'success' => 'Berhasil Ubah Data '.$nama
        ]);
    }

    public function show($token)
    {
        echo 'coming soon';
    }

    public function edit(Galeri $galeri, $token)
    {
        $ukms = Ukm::get();
        $detail = Galeri::where('token_galeri', $token)->first();

        return view('admin.galeri.galeri_edit', compact('ukms', 'detail'));
    }

    public function update(Request $request, $token)
    {
        $token_ambar = uniqid(10);
        $token_galeri = Str::random(13);
        $file = $request->file('gambar_galeri');
        $nama = $request->nama_galeri;
        $id_ukm = $request->id_ukm;
        $deskripsi = $request->deskripsi_galeri;


        $image = Galeri::where('token_galeri', $token)->first();
        try {
            $file_name = $token_ambar.'.'.$file->getClientOriginalExtension();
            $file->move('image/galeri', $file_name);

            File::delete('image/galeri/'.$image->gambar_galeri);
        } catch (\Throwable $th) {
            $file_name = $image->gambar_galeri;
        }

        $data = [
            'token_galeri' => $token_galeri,
            'id_ukm' => $id_ukm,
            'nama_galeri' => $nama,
            'gambar_galeri' => $file_name,
            'deskripsi_galeri' => $deskripsi,
        ];

        Galeri::where('token_galeri', $token)->update($data);

        return redirect('/admin/galeri')->with([
            'success' => 'Berhasil Edit Data '.$nama
        ]);
    }

    public function destroy($token)
    {
        $file = Galeri::where('token_berita', $token);
        $img = $file->first()->gambar_berita;

        File::delete('image/galeri/'.$img);
        $file->delete();

        return redirect('/admin/galeri')->with([
            'success' => 'Data Berhasil dihapus'
        ]);
    }
}
