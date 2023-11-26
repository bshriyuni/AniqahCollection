<?php

use App\Models\clothes;
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
        Schema::create('clothes', function (Blueprint $table) {
            $table->id();
            $table->string('kode_baju');
            $table->string('deskripsi');
            $table->string('gambar', 100);
            $table->integer('jumlah_dewasa');
            $table->integer('jumlah_anak');
            $table->string('syarat_ketentuan');
            $table->decimal('harga', 10, 3);
            $table->timestamps();
        });

        // Menambahkan data awal
        // $dataAwal = new clothes;
        // $dataAwal->kode_baju = 'A22301';
        // $dataAwal->deskripsi = 'INI DESKRISI';
        // $dataAwal->gambar = 'foto/baju1.jpg';
        // $dataAwal->jumlah_dewasa = '5';
        // $dataAwal->jumlah_anak = '5';
        // $dataAwal->syarat_ketentuan = 'ini syarat dan ketentuannya';
        // $dataAwal->harga = '100';
        // $dataAwal->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clothes');
    }
};
