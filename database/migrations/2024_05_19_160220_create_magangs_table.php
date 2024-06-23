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
        Schema::create('magangs', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('lokasi');
            $table->string('bidang')->nullable();
            $table->string('kontak')->nullable();
            $table->string('laporan')->nullable();
            $table->foreignId('mahasiswa_id')->references('id')->on('mahasiswas')->onDelete('cascade')->constrained();
            $table->foreignId('dosbing_id')->references('id')->on('dosbings')->onDelete('cascade')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('magangs');
    }
};
