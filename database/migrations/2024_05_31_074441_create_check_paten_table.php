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
        Schema::create('check_paten', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('paten_id')->constrained('paten');
            $table->enum('cek_data',['Benar','Salah','menunggu Pemeriksaan'])->default('Menunggu Pemeriksaan');
            $table->string('keterangan')->default('Data Paten Belum DIcek');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check_paten');
    }
};
