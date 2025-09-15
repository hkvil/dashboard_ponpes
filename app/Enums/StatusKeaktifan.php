<?php
// app/Enums/Enums.php
namespace App\Enums;
enum StatusKeaktifan: string {
    case AKTIF = 'AKTIF';
    case NONAKTIF = 'NONAKTIF';
    case CUTI = 'CUTI';
}