<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KategoriUkm extends Model
{
    use HasFactory;
    protected $table = 'kategori_ukm';
    protected $guarded = [];

    public static function getAllKategoriUkm()
    {
        return DB::table('kategori_ukm');
    }

    public function Ukm()
    {
        return $this->belongsToMany(Ukm::class, 'pivot_ukm');
    }
}
