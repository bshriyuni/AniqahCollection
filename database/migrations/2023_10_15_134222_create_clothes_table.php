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
            $table->string('foto');
            $table->string('kategori_baju');
            $table->string('syarat_ketentuan');
            $table->string('harga');
            $table->integer('jumlah_stok');
            $table->timestamps();
        });

        // Menambahkan data awal
        $dataAwal = new clothes;
        $dataAwal->kode_baju = 'A22301';
        $dataAwal->deskripsi = 'INI DESKRISI';
        $dataAwal->foto = 'disini foto';
        $dataAwal->kategori_baju = 'Anak';
        $dataAwal->syarat_ketentuan = 'ini syarat dan ketentuannya';
        $dataAwal->harga = 'Rp.100.000';
        $dataAwal->jumlah_stok = '6';
        $dataAwal->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clothes');
    }
};
