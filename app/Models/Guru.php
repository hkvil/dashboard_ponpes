<?php
// app/Models/Guru.php
namespace App\Models;

use App\Enums\NamaMadrasah;
use App\Enums\SemesterAjaran;
use App\Enums\JK;
use App\Enums\KategoriPersonil;
use App\Enums\StatusKepegawaian;
use App\Enums\StatusKeaktifan;
use App\Enums\Pendidikan;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
      'no_urut','profil_url','jenis_unit','nama_madrasah','tahun_pelajaran','semester',
      'nama_lengkap','tempat_lahir','tanggal_lahir','jenis_kelamin','agama',
      'no_telp','nama_ibu','nik_passport',
      'kategori_personil','keterangan_tugas','status_kepegawaian','mulai_bertugas','status_keaktifan',
      'pendidikan_terakhir','lulusan','linier','status_pns','guru_tetap','sertifikasi','sertifikasi_non_madrasah'
    ];
    protected $casts = [
      'tanggal_lahir'=>'date',
      'mulai_bertugas'=>'date',
      'linier'=>'boolean','status_pns'=>'boolean','guru_tetap'=>'boolean',
      'jenis_unit'=>NamaMadrasah::class,
      'semester'=>SemesterAjaran::class,
      'jenis_kelamin'=>JK::class,
      'kategori_personil'=>KategoriPersonil::class,
      'status_kepegawaian'=>StatusKepegawaian::class,
      'status_keaktifan'=>StatusKeaktifan::class,
      'pendidikan_terakhir'=>Pendidikan::class,
    ];
}
