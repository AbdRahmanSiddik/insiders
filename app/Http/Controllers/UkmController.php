<?php

namespace App\Http\Controllers;

use App\Models\KategoriUkm;
use App\Models\Ukm;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class UkmController extends Controller
{
    protected $ukm;
    protected $kategoriUkm;

    public function __construct()
    {
        $this->ukm = new Ukm();
        $this->kategoriUkm = new KategoriUkm();
    }

    public function index()
    {
        $ukms = $this->ukm->get();

        return view('admin.info.ukm.ukm', compact('ukms'));
    }

    public function create()
    {
        $kategoriUkms = $this->kategoriUkm->get();

        return view('admin.info.ukm.ukm_add', compact('kategoriUkms'));
    }

    public function store(Request $request)
    {
        $token = uniqid();
        $token_ukm = Str::random('13');
        $logo_ukm = $request->file('logo_ukm');
        $status_ukm = $request->status_ukm;
        $nama_ukm = $request->nama_ukm;
        $link_pendaftaran = $request->link_pendaftaran;
        $deskripsi_ukm = $request->deskripsi_ukm;

        $file_name = $token . '.' . $logo_ukm->getClientOriginalExtension();

        $data = [
            'token_ukm' => $token_ukm,
            'status_ukm' => $status_ukm,
            'nama_ukm' => $nama_ukm,
            'logo_ukm' => $file_name,
            'link_pendaftaran' => $link_pendaftaran,
            'deskripsi_ukm' => $deskripsi_ukm
        ];

        $logo_ukm->move('image/ukm', $file_name);
        Ukm::create($data)
        ->kategoriUkm()->sync($request->input('kategori', [])); // memasukkan data ke pivot

        return redirect('/ukm')->with([
            'success' => 'Berhasil Memasukkan Data'.$nama_ukm
        ]);
    }

    public function show($token)
    {
        $detail = $this->ukm->where('token_ukm', $token)->first();

        return view('admin.info.ukm.ukm_view', compact('detail'));
    }

    public function edit($token)
    {
        $detail = $this->ukm->where('token_ukm', $token)->first();
        $kategoriUkms = $this->kategoriUkm->get();

        return view('admin.info.ukm.ukm_edit', compact('detail', 'kategoriUkms'));
    }

    public function update(Request $request, $ukm)
    {
        $token = uniqid();
        $token_ukm = Str::random('13');
        $logo_ukm = $request->file('logo_ukm');
        $status_ukm = $request->status_ukm;
        $nama_ukm = $request->nama_ukm;
        $link_pendaftaran = $request->link_pendaftaran;
        $deskripsi_ukm = $request->deskripsi_ukm;

        $image = $this->ukm::where('token_ukm', $ukm)->first();
        try {
            $file_name = $token . '.' . $logo_ukm->getClientOriginalExtension();
            $logo_ukm->move('image/ukm', $file_name);

            File::delete('image/ukm/'.$image->logo_ukm);
        } catch (\Throwable $th) {
            $file_name = $image->logo_ukm;
        }

        $data = [
            'token_ukm' => $token_ukm,
            'status_ukm' => $status_ukm,
            'nama_ukm' => $nama_ukm,
            'logo_ukm' => $file_name,
            'link_pendaftaran' => $link_pendaftaran,
            'deskripsi_ukm' => $deskripsi_ukm
        ];


        $this->ukm->where('token_ukm', $ukm)->update($data);
        $this->ukm->where('token_ukm', $token_ukm)->first()->kategoriUkm()->sync($request->input('kategori', [])); //update pivot


        return redirect('/ukm')->with([
            'success' => 'Berhasil Ubah Data '.$nama_ukm
        ]);
    }

    public function destroy($token)
    {
        $file = $this->ukm->where('token_ukm', $token);
        $img = $file->first()->logo_ukm;

        File::delete('image/ukm/'.$img);
        $file->delete();

        return redirect('/ukm')->with([
            'success' => 'Data Berhasil dihapus'
        ]);
    }

}
