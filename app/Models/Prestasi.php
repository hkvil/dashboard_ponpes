<?php
namespace App\Models;

use App\Enums\TingkatLomba;
use App\Enums\KategoriLomba;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prestasi extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = true;   // karena pk int auto increment
    protected $fillable = [
        'id_santri','nama','kelas','bidang_lomba',
        'penyelenggara','tingkat','peringkat',
        'kategori','tahun'
    ];

    protected $casts = [
        'tingkat'  => TingkatLomba::class,
        'kategori' => KategoriLomba::class,
        'tahun'    => 'integer',
    ];

    public function santri(): BelongsTo
    {
        return $this->belongsTo(Santri::class, 'id_santri', 'id');
    }
}
