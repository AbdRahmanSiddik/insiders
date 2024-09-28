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
        Schema::create('kategori_ukm', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kategori');
            $table->timestamps();
        });

        Schema::create('ukm', function (Blueprint $table) {
            $table->id();
            $table->string('token_ukm');
            $table->boolean('status_ukm');
            $table->string('nama_ukm');
            $table->string('logo_ukm');
            $table->string('link_pendaftaran');
            $table->text('deskripsi_ukm');
            $table->timestamps();
        });

        Schema::create('pivot_ukm', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kategori_ukm_id');
            $table->unsignedBigInteger('ukm_id');
            $table->foreign('kategori_ukm_id')->references('id')->on('kategori_ukm')->onDelete('cascade');
            $table->foreign('ukm_id')->references('id')->on('ukm')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_ukm');
        Schema::dropIfExists('ukm');
        Schema::dropIfExists('pivot_ukm');
    }
};
