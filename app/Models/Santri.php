<?php

// app/Models/Santri.php
namespace App\Models;

use App\Enums\NamaMadrasah;
use App\Enums\JK;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Santri extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
      'nama_madrasah','tahun_pelajaran','alamat_madrasah','kabupaten_kota_madrasah','madrasah_induk',
      'nomor_urut','nomor_induk','nisn','foto_url','nama_santri','jenis_kelamin','kelas',
      'tempat_lahir','tanggal_lahir','tgl_lahir','bln_lahir','thn_lahir',
      'ayah','ibu','desa_kelurahan','kecamatan','kabupaten_kota','alamat_lengkap',
      'ijazah_nomor','ijazah_tahun','lulus'
    ];

    protected $casts = [
      'lulus' => 'boolean',
      'tanggal_lahir' => 'date',
      // enums via string cast helper:
      'nama_madrasah' => NamaMadrasah::class,
      'jenis_kelamin' => JK::class,
    ];

    public function prestasis(): HasMany { return $this->hasMany(Prestasi::class,'id_santri','id'); }
    public function pelanggarans(): HasMany { return $this->hasMany(Pelanggaran::class,'id_santri','id'); }
}
