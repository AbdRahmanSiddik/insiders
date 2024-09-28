<?php

namespace App\Models\Ahp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    protected $table = 'kriteria';
    protected $guarded = [];

    public function nilai()
    {
        return $this->hasMany(NilaiUKM::class);
    }

    public function bobot()
    {
        return $this->hasOne(BobotKriteria::class);
    }
}
