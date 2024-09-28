<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{   protected $berita;
    protected $kategoriBerita;

    public function __construct()
    {
        $this->berita = new Berita();
        $this->kategoriBerita = new KategoriBerita();
    }
    public function index()
    {
        $beritas = $this->berita->get();

        return view('admin.info.berita.berita', compact('beritas'));
    }

    public function create()
    {
        $kategoriBeritas = $this->kategoriBerita->get();

        return view('admin.info.berita.berita_add', compact('kategoriBeritas'));
    }

    public function store(Request $request)
    {
        $token = uniqid();
        $token_berita = Str::random('13');
        $gambar_berita = $request->file('gambar_berita');
        $status_post = $request->status_post;
        $nama_berita = $request->nama_berita;
        $deskripsi_berita = $request->deskripsi_berita;

        $file_name = $token . '.' . $gambar_berita->getClientOriginalExtension();

        $data = [
            'token_berita' => $token_berita,
            'status_post' => $status_post,
            'nama_berita' => $nama_berita,
            'gambar_berita' => $file_name,
            'deskripsi_berita' => $deskripsi_berita
        ];

        $gambar_berita->move('image/berita', $file_name);
        Berita::create($data)
        ->kategoriBerita()->sync($request->input('kategori', [])); // memasukkan data ke pivot

        return redirect('/berita')->with([
            'success' => 'Berhasil Memasukkan Data'.$nama_berita
        ]);
    }

    public function show($token)
    {
        $detail = $this->berita->where('token_berita', $token)->first();

        return view('admin.info.berita.berita_view', compact('detail'));
    }

    public function edit($token)
    {
        $detail = $this->berita->where('token_berita', $token)->first();
        $kategoriBeritas = $this->kategoriBerita->get();

        return view('admin.info.berita.berita_edit', compact('detail', 'kategoriBeritas'));
    }

    public function update(Request $request, $berita)
    {
        $token = uniqid();
        $token_berita = Str::random('13');
        $gambar_berita = $request->file('gambar_berita');
        $status_post = $request->status_post;
        $nama_berita = $request->nama_berita;
        $deskripsi_berita = $request->deskripsi_berita;

        $image = $this->berita::where('token_berita', $berita)->first();
        try {
            $file_name = $token . '.' . $gambar_berita->getClientOriginalExtension();
            $gambar_berita->move('image/berita', $file_name);

            File::delete('image/berita/'.$image->gambar_berita);
        } catch (\Throwable $th) {
            $file_name = $image->gambar_berita;
        }

        $data = [
            'token_berita' => $token_berita,
            'status_post' => $status_post,
            'nama_berita' => $nama_berita,
            'gambar_berita' => $file_name,
            'deskripsi_berita' => $deskripsi_berita
        ];

        $this->berita->where('token_berita', $berita)->update($data);
        $this->berita->where('token_berita', $token_berita)->first()->kategoriBerita()->sync($request->input('kategori', [])); //update pivot


        return redirect('/berita')->with([
            'success' => 'Berhasil Ubah Data '.$nama_berita
        ]);
    }

    public function destroy($token)
    {
        $file = $this->berita->where('token_berita', $token);
        $img = $file->first()->gambar_berita;

        File::delete('image/berita/'.$img);
        $file->delete();

        return redirect('/berita')->with([
            'success' => 'Data Berhasil dihapus'
        ]);
    }
}
