<?php

namespace App\Models;

use App\Models\Ahp\NilaiUKM;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukm extends Model
{
    use HasFactory;
    protected $table = 'ukm';
    protected $guarded = [];

    public function kategoriUkm()
    {
        return $this->belongsToMany(KategoriUkm::class, 'pivot_ukm');
    }

    public function nilai()
    {
        return $this->hasMany(NilaiUKM::class, 'ukm_id');
    }
}
