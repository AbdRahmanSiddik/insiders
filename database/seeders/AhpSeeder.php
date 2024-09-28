<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AhpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kriteria')->insert([
            ['nama' => 'Prestasi dan Pencapaian'],
            ['nama' => 'Jumlah Anggota'],
            ['nama' => 'Keberlanjutan Program'],
            ['nama' => 'Inovasi dan Kreativitas'],
            ['nama' => 'Kontribusi Sosial'],
            ['nama' => 'Kepuasan Anggota'],
            ['nama' => 'Dukungan Fasilitas'],
            ['nama' => 'Keuangan dan Pendanaan'],
        ]);

        $nilai = [
            [1, 1, 100], [1, 2, 50],  [1, 3, 0.9], [1, 4, 0.8], [1, 5, 1], [1, 6, 0.9], [1, 7, 1], [1, 8, 1],
            [2, 1, 35],  [2, 2, 100], [2, 3, 0.5], [2, 4, 0.6], [2, 5, 0.4], [2, 6, 0.5], [2, 7, 0.4], [2, 8, 0.4],
        ];

        foreach ($nilai as $n) {
            DB::table('nilai_ukm')->insert([
                'ukm_id' => $n[0],
                'kriteria_id' => $n[1],
                'nilai' => $n[2],
            ]);
        }

        $bobot = [
            [1, 0.333],
            [2, 0.167],
            [3, 0.130],
            [4, 0.071],
            [5, 0.055],
            [6, 0.071],
            [7, 0.093],
            [8, 0.054],
        ];

        foreach ($bobot as $b) {
            DB::table('bobot_kriteria')->insert([
                'kriteria_id' => $b[0],
                'bobot' => $b[1],
            ]);
        }

    }
}
