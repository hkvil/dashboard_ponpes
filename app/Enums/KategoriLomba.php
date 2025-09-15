<?php
// app/Enums/Enums.php
namespace App\Enums;

enum KategoriLomba: string {
    case AKADEMIK = 'AKADEMIK';
    case NONAKADEMIK = 'NONAKADEMIK';
    case OLAHRAGA = 'OLAHRAGA';
    case SENI = 'SENI';
    case AGAMA = 'AGAMA';
    case LAINNYA = 'LAINNYA';
}
