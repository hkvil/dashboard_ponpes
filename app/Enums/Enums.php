<?php
// app/Enums/Enums.php
namespace App\Enums;

enum NamaMadrasah: string {
    case TK_AL_ITTIFAQIAH = 'TK_AL_ITTIFAQIAH';
    case TPQ_AL_ITTIFAQIAH = 'TPQ_AL_ITTIFAQIAH';
    case MD_AL_ITTIFAQIAH = 'MD_AL_ITTIFAQIAH';
    case MI_AL_ITTIFAQIAH = 'MI_AL_ITTIFAQIAH';
    case MTS1_AL_ITTIFAQIAH = 'MTS1_AL_ITTIFAQIAH';
    case MTS2_AL_ITTIFAQIAH = 'MTS2_AL_ITTIFAQIAH';
    case MA1_AL_ITTIFAQIAH = 'MA1_AL_ITTIFAQIAH';
    case MA2_AL_ITTIFAQIAH = 'MA2_AL_ITTIFAQIAH';
    case IAIQI = 'IAIQI';
}

enum SemesterAjaran: string {
    case GANJIL = 'GANJIL';
    case GENAP  = 'GENAP';
}

enum KategoriPersonil: string {
    case GURU = 'GURU';
    case PENGURUS = 'PENGURUS';
    case STAFF = 'STAFF';
}

enum KategoriStatusGuru: string {
    case BARU = 'BARU';
    case RESIGN = 'RESIGN';
}

enum JK: string {
    case L = 'L';
    case P = 'P';
}

enum StatusKepegawaian: string {
    case PNS = 'PNS';
    case GTY = 'GTY';
    case GTTY = 'GTTY';
    case HONORER = 'HONORER';
    case KONTRAK = 'KONTRAK';
    case LAINNYA = 'LAINNYA';
}

enum StatusKeaktifan: string {
    case AKTIF = 'AKTIF';
    case NONAKTIF = 'NONAKTIF';
    case CUTI = 'CUTI';
}

enum Pendidikan: string {
    case SD = 'SD';
    case SMP = 'SMP';
    case SMA = 'SMA';
    case D1 = 'D1';
    case D2 = 'D2';
    case D3 = 'D3';
    case D4 = 'D4';
    case S1 = 'S1';
    case S2 = 'S2';
    case S3 = 'S3';
    case LAINNYA = 'LAINNYA';
}

enum TingkatLomba: string {
    case SEKOLAH = 'SEKOLAH';
    case KECAMATAN = 'KECAMATAN';
    case KABUPATEN = 'KABUPATEN';
    case PROVINSI = 'PROVINSI';
    case NASIONAL = 'NASIONAL';
    case INTERNASIONAL = 'INTERNASIONAL';
}

enum KategoriLomba: string {
    case AKADEMIK = 'AKADEMIK';
    case NONAKADEMIK = 'NONAKADEMIK';
    case OLAHRAGA = 'OLAHRAGA';
    case SENI = 'SENI';
    case AGAMA = 'AGAMA';
    case LAINNYA = 'LAINNYA';
}
