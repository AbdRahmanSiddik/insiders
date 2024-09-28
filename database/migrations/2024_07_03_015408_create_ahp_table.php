<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kriteria', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });

        Schema::create('nilai_ukm', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ukm_id');
            $table->foreign('ukm_id')->references('id')->on('ukm')->onDelete('cascade');
            $table->unsignedBigInteger('kriteria_id');
            $table->foreign('kriteria_id')->references('id')->on('kriteria')->onDelete('cascade');
            $table->decimal('nilai', 10, 6);
            $table->timestamps();
        });

        Schema::create('bobot_kriteria', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kriteria_id');
            $table->foreign('kriteria_id')->references('id')->on('kriteria')->onDelete('cascade');
            $table->decimal('bobot', 8, 6); // Bobot kriteria dalam perhitungan AHP
            $table->timestamps();
        });

        Schema::create('hasil_penilaian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ukm_id');
            $table->foreign('ukm_id')->references('id')->on('ukm')->onDelete('cascade');
            $table->decimal('nilai_total', 8, 6); // Nilai total hasil penilaian untuk UKM tertentu
            // Tambahkan kolom-kolom lain yang mungkin diperlukan untuk detail hasil penilaian
            $table->timestamps();
        });

        Schema::create('perhitungan_konsistensi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ukm_id');
            $table->foreign('ukm_id')->references('id')->on('ukm')->onDelete('cascade');
            $table->decimal('nilai_ci', 8, 6); // Nilai Consistency Index
            $table->decimal('nilai_cr', 8, 6); // Nilai Consistency Ratio
            // Tambahkan kolom-kolom lain yang mungkin diperlukan untuk detail perhitungan konsistensi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kriteria');
        Schema::dropIfExists('nilai_ukm');
        Schema::dropIfExists('bobot_kriteria');
        Schema::dropIfExists('hasil_penilaian');
        Schema::dropIfExists('perhitungan konsistensi');
    }
};
