<?php

// database/migrations/xxxx_xx_xx_create_gurus_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void {
    Schema::create('gurus', function (Blueprint $table) {
      $table->id('id'); // bigserial
      $table->integer('no_urut')->nullable();
      $table->text('profil_url')->nullable();

      $table->string('jenis_unit', 50);  // enum string
      $table->string('nama_madrasah', 150)->nullable();
      $table->string('tahun_pelajaran', 20)->nullable();
      $table->string('semester', 10)->nullable(); // enum string

      $table->string('nama_lengkap', 120);
      $table->string('tempat_lahir', 100)->nullable();
      $table->date('tanggal_lahir')->nullable();
      $table->string('jenis_kelamin', 1)->nullable();
      $table->string('agama', 20)->nullable();

      $table->string('no_telp', 25)->nullable();
      $table->string('nama_ibu', 120)->nullable();

      $table->string('nik_passport', 32)->nullable();

      $table->string('kategori_personil', 20)->nullable();
      $table->string('keterangan_tugas', 150)->nullable();
      $table->string('status_kepegawaian', 20)->nullable();
      $table->date('mulai_bertugas')->nullable();
      $table->string('status_keaktifan', 10)->nullable();

      $table->string('pendidikan_terakhir', 10)->nullable();
      $table->string('lulusan', 120)->nullable();
      $table->boolean('linier')->default(false);

      $table->boolean('status_pns')->default(false);
      $table->boolean('guru_tetap')->default(false);
      $table->text('sertifikasi')->nullable();
      $table->text('sertifikasi_non_madrasah')->nullable();

      $table->timestamps();
      $table->index(['jenis_unit','tahun_pelajaran','semester','status_keaktifan']);
    });
  }
  public function down(): void { Schema::dropIfExists('gurus'); }
};

