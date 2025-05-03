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
        Schema::create('activity_documentation', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->enum('fungsi_tim', ['Distribusi', 'Sosial', 'Pertanian', 'Produksi', 'Umum', 'Kepala', 'Humas']);
            $table->string('nama_kegiatan');
            $table->text('link_asset')->nullable();
            $table->text('link_vo_script')->nullable();
            $table->text('link_cover')->nullable();
            $table->text('link_eksport')->nullable();
            $table->enum('jenis_kegiatan', ['Statistik', 'Internal']);
            $table->text('link_ig')->nullable();
            $table->text('link_youtube')->nullable();
            $table->text('link_bps_news')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_documentation');
    }
};
