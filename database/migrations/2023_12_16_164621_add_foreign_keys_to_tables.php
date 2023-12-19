<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTables extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('clothes', function (Blueprint $table) {
            $table->index('kode_baju');
        });
        
        Schema::table('order_details', function (Blueprint $table) {
            $table->index('kode_baju');
            $table->foreign('kode_baju')->references('kode_baju')->on('clothes')->onDelete('cascade');
        });
    
        Schema::table('payments', function (Blueprint $table) {
            $table->foreign('order_details_id')->references('id')->on('order_details');
        });
    
        Schema::table('order_details', function (Blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Tambahkan kode untuk menghapus foreign key di sini jika diperlukan
    }
}
