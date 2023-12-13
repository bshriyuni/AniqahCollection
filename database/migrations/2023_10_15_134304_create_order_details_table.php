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
            $table->string('nama_lengkap');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('kode_baju');
            $table->integer('jumlah_pesanan');
            $table->integer('total_harga');
            $table->date('tgl_pengambilan');
            $table->date('tgl_pengembalian');
            $table->enum('pembayaran', ['tunai', 'non-tunai']);
            $table->enum('status', ['Menunggu Konfirmasi', 'Proses Pengambilan', 'Pesanan Diambil', 'Selesai'])->default('Menunggu Konfirmasi');
            $table->string('bukti_pembayaran')->nullable();
            $table->timestamps();

            // $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');;
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
