<?php

// database/migrations/xxxx_xx_xx_create_pelanggarans_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void {
    Schema::create('pelanggarans', function (Blueprint $table) {
      $table->id('id');
      $table->unsignedBigInteger('id_santri')->index();
      $table->string('jenis_pelanggaran')->nullable();
      $table->smallInteger('poin')->nullable();
      $table->integer('total_poin')->nullable();
      $table->string('keterangan')->nullable();
      $table->date('tanggal')->nullable();
      $table->timestamps();

      $table->foreign('id_santri')->references('id')->on('santris')->cascadeOnDelete();
    });
  }
  public function down(): void { Schema::dropIfExists('pelanggarans'); }
};

