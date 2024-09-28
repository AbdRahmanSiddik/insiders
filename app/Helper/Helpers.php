<?php

if(!function_exists('random_badge')){
    function random_badge()
    {
        // Array dengan kalimat-kalimat
        $kalimat = array(
            "badge-soft-success",
            "badge-soft-info",
            "badge-soft-danger",
            "badge-soft-warning"
        );

        // Mengambil indeks acak dari array
        $indeks_acak = array_rand($kalimat);

        // Mengembalikan kalimat secara acak
        return $kalimat[$indeks_acak];
    }
}

if (!function_exists('kategori_berita')) {
    function kategori_berita()
    {
        $kategori = \App\Models\KategoriBerita::all();
        foreach ($kategori as $get) {
            $data[] = [
                'kategori_id' => $get->id,
                'nama_kategori' => $get->nama_kategori
            ];
        }

        return $data;
    }
}

if (!function_exists('kategori_ukm')){
    function kategori_ukm(){
        $kategori = \App\Models\KategoriUkm::all();
        foreach ($kategori as $get) {
            $data[] = [
                'kategori_id' => $get->id,
                'nama_kategori' => $get->nama_kategori,
            ];
        }

        if (empty($data)) {
            return $data[] = [
                'kategori_id' => 0,
                'nama_kategori' => 'No Data',
                ];
        } else{
            return $data;
        }
    }
}

if (!function_exists('getFirstWord')) {
    function getFirstWord($string) {
        $words = explode(' ', $string);
        return $words[0];
    }
}
