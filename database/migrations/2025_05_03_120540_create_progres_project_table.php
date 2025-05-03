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
        Schema::create('progres_project', function (Blueprint $table) {
            $table->id();
            $table->string('nama_project');
            $table->string('progres_aset')->nullable();
            $table->string('progres_script_vo')->nullable();
            $table->string('progres_editing')->nullable();
    
            $table->text('link_asset')->nullable();
            $table->text('link_vo')->nullable();
            $table->text('link_script')->nullable();
            $table->text('link_eksport')->nullable();
            $table->text('link_cover')->nullable();
    
            $table->date('countdown')->nullable(); // Deadline proyek
            $table->enum('status', ['Progres', 'Selesai'])->default('Progres');
    
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
        Schema::dropIfExists('progres_project');
    }
};
