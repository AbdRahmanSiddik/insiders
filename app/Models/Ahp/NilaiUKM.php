<?php

namespace App\Models\Ahp;

use App\Models\Ukm;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiUKM extends Model
{
    use HasFactory;

    protected $table = 'nilai_ukm';
    protected $guarded = [];

    public function ukm()
    {
        return $this->belongsTo(Ukm::class, 'ukm_id');
    }

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'kriteria_id');
    }
}
