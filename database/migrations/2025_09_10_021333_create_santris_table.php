<?php

// database/migrations/xxxx_xx_xx_create_santris_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void {
    Schema::create('santris', function (Blueprint $table) {
      $table->id('id'); // bigserial
      // Info madrasah
      $table->string('nama_madrasah', 50); // enum string
      $table->string('tahun_pelajaran', 20)->nullable();
      $table->string('alamat_madrasah', 200)->nullable();
      $table->string('kabupaten_kota_madrasah', 150)->nullable();
      $table->string('madrasah_induk', 150)->nullable();
      // Identitas & nomor
      $table->integer('nomor_urut')->nullable();
      $table->string('nomor_induk', 20)->nullable();
      $table->string('nisn', 10)->nullable();
      // Data santri
      $table->text('foto_url')->nullable();
      $table->string('nama_santri', 120);
      $table->string('jenis_kelamin', 1)->nullable(); // enum string (L/P)
      $table->string('kelas', 50)->nullable();
      // Lahir
      $table->string('tempat_lahir', 100)->nullable();
      $table->date('tanggal_lahir')->nullable();
      $table->smallInteger('tgl_lahir')->nullable();
      $table->smallInteger('bln_lahir')->nullable();
      $table->smallInteger('thn_lahir')->nullable();
      // Orang tua
      $table->string('ayah', 120)->nullable();
      $table->string('ibu', 120)->nullable();
      // Alamat siswa
      $table->string('desa_kelurahan', 120)->nullable();
      $table->string('kecamatan', 120)->nullable();
      $table->string('kabupaten_kota', 120)->nullable();
      $table->text('alamat_lengkap')->nullable();
      // Ijazah
      $table->string('ijazah_nomor', 50)->nullable();
      $table->smallInteger('ijazah_tahun')->nullable();
      // Status
      $table->boolean('lulus')->default(false);
      $table->timestamps();
      $table->index(['nama_madrasah','tahun_pelajaran','kelas']);
    });
  }

  public function down(): void { Schema::dropIfExists('santris'); }
};


