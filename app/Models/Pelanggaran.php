<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pelanggaran extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_santri','jenis_pelanggaran','poin',
        'total_poin','keterangan','tanggal'
    ];

    protected $casts = [
        'poin'       => 'integer',
        'total_poin' => 'integer',
        'tanggal'    => 'date',
    ];

    public function santri(): BelongsTo
    {
        return $this->belongsTo(Santri::class, 'id_santri', 'id');
    }
}
