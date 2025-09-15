<?php
// app/Enums/Enums.php
namespace App\Enums;

enum TingkatLomba: string {
    case SEKOLAH = 'SEKOLAH';
    case KECAMATAN = 'KECAMATAN';
    case KABUPATEN = 'KABUPATEN';
    case PROVINSI = 'PROVINSI';
    case NASIONAL = 'NASIONAL';
    case INTERNASIONAL = 'INTERNASIONAL';
}

