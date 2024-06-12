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
        Schema::create('pembobotan', function (Blueprint $table) {
            $table->id('id_nilai');
            $table->unsignedBigInteger('id_supplier');
            $table->unsignedBigInteger('id_kriteria');
            $table->text('nilai');
            $table->timestamps();

            // Menambahkan kunci asing
            $table->foreign('id_supplier')->references('id_supplier')->on('alternative')->onDelete('cascade');
            $table->foreign('id_kriteria')->references('id_kriteria')->on('kriteria')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembobotans');
    }
};
