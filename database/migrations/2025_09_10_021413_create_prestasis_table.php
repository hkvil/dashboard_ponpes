'<?php

// database/migrations/xxxx_xx_xx_create_prestasis_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void {
    Schema::create('prestasis', function (Blueprint $table) {
      $table->id('id');
      $table->unsignedBigInteger('id_santri')->index();
      $table->string('nama')->nullable();
      $table->string('kelas', 50)->nullable();
      $table->string('bidang_lomba')->nullable();
      $table->string('penyelenggara')->nullable();
      $table->string('tingkat', 20)->nullable();   // enum string
      $table->smallInteger('peringkat')->nullable();
      $table->string('kategori', 20)->nullable();  // enum string
      $table->smallInteger('tahun')->nullable();
      $table->timestamps();

      $table->foreign('id_santri')->references('id')->on('santris')->cascadeOnDelete();
    });
  }
  public function down(): void { Schema::dropIfExists('prestasis'); }
};

