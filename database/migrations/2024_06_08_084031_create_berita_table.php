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
        Schema::create('kategori_berita', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kategori');
            $table->timestamps();
        });

        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('token_berita');
            $table->boolean('status_post');
            $table->string('nama_berita');
            $table->string('gambar_berita');
            $table->text('deskripsi_berita');
            $table->timestamps();
        });

        Schema::create('pivot_berita', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kategori_berita_id');
            $table->unsignedBigInteger('berita_id');
            $table->foreign('kategori_berita_id')->references('id')->on('kategori_berita')->onDelete('cascade');
            $table->foreign('berita_id')->references('id')->on('berita')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_berita');
        Schema::dropIfExists('berita');
        Schema::dropIfExists('pivot_berita');
    }
};
