<?php
namespace App\Filament\Resources\Gurus\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class GuruForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('profil_url')
                    ->label('Foto Profil')
                    ->image()
                    ->disk('local')
                    ->directory('foto_guru')
                    ->imagePreviewHeight('200')
                    ->acceptedFileTypes(['image/jpeg', 'image/png'])
                    ->maxSize(200)
                    ->columnSpanFull(),

                TextInput::make('no_urut')
                    ->label('Nomor Urut')
                    ->numeric(),

                Select::make('jenis_unit')
                    ->label('Unit Lembaga')
                    ->options([
                        'TK_AL_ITTIFAQIAH' => 'TK AL ITTIFAQIAH',
                        'TPQ_AL_ITTIFAQIAH' => 'TPQ AL ITTIFAQIAH',
                        'MD_AL_ITTIFAQIAH' => 'MD AL ITTIFAQIAH',
                        'MI_AL_ITTIFAQIAH' => 'MI AL ITTIFAQIAH',
                        'MTS1_AL_ITTIFAQIAH' => 'MTS1 AL ITTIFAQIAH',
                        'MTS2_AL_ITTIFAQIAH' => 'MTS2 AL ITTIFAQIAH',
                        'MA1_AL_ITTIFAQIAH' => 'MA1 AL ITTIFAQIAH',
                        'MA2_AL_ITTIFAQIAH' => 'MA2 AL ITTIFAQIAH',
                        'IAIQI' => 'IAIQI',
                    ])
                    ->required(),

                TextInput::make('nama_madrasah')
                    ->label('Nama Madrasah')
                    ->maxLength(150),

                TextInput::make('tahun_pelajaran')
                    ->label('Tahun Pelajaran')
                    ->maxLength(20),

                Select::make('semester')
                    ->label('Semester')
                    ->options([
                        'GANJIL' => 'Ganjil',
                        'GENAP' => 'Genap',
                    ]),

                TextInput::make('nama_lengkap')
                    ->label('Nama Lengkap')
                    ->maxLength(120)
                    ->required(),

                TextInput::make('tempat_lahir')
                    ->label('Tempat Lahir')
                    ->maxLength(100),

                DatePicker::make('tanggal_lahir')
                    ->label('Tanggal Lahir'),

                Select::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->options([
                        'L' => 'Laki-laki',
                        'P' => 'Perempuan',
                    ])
                    ->required(),

                TextInput::make('agama')
                    ->label('Agama')
                    ->maxLength(20),

                TextInput::make('no_telp')
                    ->label('Nomor Telepon')
                    ->maxLength(25),

                TextInput::make('nama_ibu')
                    ->label('Nama Ibu')
                    ->maxLength(120),

                TextInput::make('nik_passport')
                    ->label('NIK/Paspor')
                    ->maxLength(32),

                Select::make('kategori_personil')
                    ->label('Kategori Personil')
                    ->options([
                        'GURU' => 'Guru',
                        'PENGURUS' => 'Pengurus',
                        'STAFF' => 'Staff',
                    ]),

                TextInput::make('keterangan_tugas')
                    ->label('Keterangan Tugas')
                    ->maxLength(150),

                Select::make('status_kepegawaian')
                    ->label('Status Kepegawaian')
                    ->options([
                        'PNS' => 'PNS',
                        'GTY' => 'GTY',
                        'GTTY' => 'GTTY',
                        'HONORER' => 'Honorer',
                        'KONTRAK' => 'Kontrak',
                        'LAINNYA' => 'Lainnya',
                    ]),

                DatePicker::make('mulai_bertugas')
                    ->label('Mulai Bertugas'),

                Select::make('status_keaktifan')
                    ->label('Status Keaktifan')
                    ->options([
                        'AKTIF' => 'Aktif',
                        'NONAKTIF' => 'Nonaktif',
                        'CUTI' => 'Cuti',
                    ]),

                Select::make('pendidikan_terakhir')
                    ->label('Pendidikan Terakhir')
                    ->options([
                        'SD' => 'SD',
                        'SMP' => 'SMP',
                        'SMA' => 'SMA',
                        'D1' => 'D1',
                        'D2' => 'D2',
                        'D3' => 'D3',
                        'D4' => 'D4',
                        'S1' => 'S1',
                        'S2' => 'S2',
                        'S3' => 'S3',
                        'LAINNYA' => 'Lainnya',
                    ]),

                TextInput::make('lulusan')
                    ->label('Asal Perguruan Tinggi/Sekolah')
                    ->maxLength(120),

                Toggle::make('linier')
                    ->label('Linier dengan Mata Pelajaran'),

                Toggle::make('status_pns')
                    ->label('Status PNS'),

                Toggle::make('guru_tetap')
                    ->label('Guru Tetap Yayasan'),

                Textarea::make('sertifikasi')
                    ->label('Sertifikasi'),

                Textarea::make('sertifikasi_non_madrasah')
                    ->label('Sertifikasi Non Madrasah'),
            ]);
    }
}
