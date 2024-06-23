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
        Schema::create('magang_matkul', function (Blueprint $table) {
            $table->id();
            $table->foreignId('magang_id')->references('id')->on('magangs')->onDelete('cascade')->constrained();
            $table->foreignId('matkul_id')->references('id')->on('matkuls')->onDelete('cascade')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('magang_matkul');
    }
};
