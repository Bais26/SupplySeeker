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
        Schema::create('nilai_kriteria', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_supplier');
            $table->string('nama_subkriteria');
            $table->enum('type', ['1', '2','3', '4','5']);
            $table->timestamps();

            $table->foreign('id_supplier')->references('id_supplier')->on('alternative')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_kriteria');
    }
};
