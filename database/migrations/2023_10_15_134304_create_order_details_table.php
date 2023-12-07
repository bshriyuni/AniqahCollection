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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('order_id');
            $table->string('nama_pelanggan');
            $table->string('kode_baju');
            $table->string('no_hp');
            $table->integer('dewasa');
            $table->integer('anak');
            $table->date('tgl_pengambilan');
            $table->date('tgl_pengembalian');
            $table->enum('status', ['Menunggu Konfirmasi', 'Proses Pengambilan', 'Pesanan Diambil', 'Selesai'])->default('Menunggu Konfirmasi');
            $table->timestamps();

            // $table->foreign('order_id')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
