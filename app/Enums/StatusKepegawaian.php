<?php
// app/Enums/Enums.php
namespace App\Enums;

enum StatusKepegawaian: string {
    case PNS = 'PNS';
    case GTY = 'GTY';
    case GTTY = 'GTTY';
    case HONORER = 'HONORER';
    case KONTRAK = 'KONTRAK';
    case LAINNYA = 'LAINNYA';
}
