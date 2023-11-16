<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Lokasi;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lokasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jalan');
            $table->string('kota_prov');
            $table->string('negara');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();
        });

         // Menambahkan data awal
         $lokasiAwal = new Lokasi;
         $lokasiAwal->nama_jalan = 'Jln.Pemuda II. (Perumahan Fortuna Permai)';
         $lokasiAwal->kota_prov = 'Takkalala, Wara Selatan, Palopo City, South Sulawesi';
         $lokasiAwal->negara = 'Indonesia';
         $lokasiAwal->latitude = '-3.022163';
         $lokasiAwal->longitude = '120.212572';
         $lokasiAwal->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lokasis');
    }
};
