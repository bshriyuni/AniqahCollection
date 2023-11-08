<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\carapesan;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carapesans', function (Blueprint $table) {
            $table->id();
            $table->string('step1');
            $table->string('step2');
            $table->string('step3');
            $table->string('step4');
            $table->string('step5');
            $table->timestamps();
        });

        $dataAwal = new carapesan;
        $dataAwal->step1 = "Lini masukkkt, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.";
        $dataAwal->step2 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.";
        $dataAwal->step3 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.";
        $dataAwal->step4 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.";
        $dataAwal->step5 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.";
        $dataAwal->save();

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carapesans');
    }
};
