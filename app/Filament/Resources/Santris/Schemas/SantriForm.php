<?php

namespace App\Filament\Resources\Santris\Schemas;

use App\Enums\JK;
use App\Enums\NamaMadrasah;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

class SantriForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('foto_url')
                    ->label('Foto Profil')
                    ->image()
                    ->disk('public')
                    ->directory('foto_santri')
                    ->imagePreviewHeight('200')
                    ->acceptedFileTypes(['image/jpeg', 'image/png'])
                    ->maxSize(200)
                    ->columnSpanFull(),
                Select::make('nama_madrasah')
                    ->label('Nama Madrasah')
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

                TextInput::make('tahun_pelajaran')
                    ->label('Tahun Pelajaran')
                    ->maxLength(20),

                TextInput::make('alamat_madrasah')
                    ->label('Alamat Madrasah')
                    ->maxLength(200),

                TextInput::make('kabupaten_kota_madrasah')
                    ->label('Kabupaten/Kota Madrasah')
                    ->maxLength(150),

                TextInput::make('madrasah_induk')
                    ->label('Madrasah Induk')
                    ->maxLength(150),

                TextInput::make('nomor_urut')
                    ->label('Nomor Urut')
                    ->numeric(),

                TextInput::make('nomor_induk')
                    ->label('Nomor Induk')
                    ->maxLength(20),

                TextInput::make('nisn')
                    ->label('NISN')
                    ->maxLength(10),

                TextInput::make('nama_santri')
                    ->label('Nama Santri')
                    ->maxLength(120)
                    ->required(),

                Select::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->options([
                        'L' => 'Laki-laki',
                        'P' => 'Perempuan',
                    ])
                    ->required(),

                TextInput::make('kelas')
                    ->label('Kelas'),

                TextInput::make('tempat_lahir')
                    ->label('Tempat Lahir')
                    ->maxLength(100),

                DatePicker::make('tanggal_lahir')
                    ->label('Tanggal Lahir'),

                TextInput::make('tgl_lahir')
                    ->label('Hari Lahir')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(31),

                TextInput::make('bln_lahir')
                    ->label('Bulan Lahir')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(12),

                TextInput::make('thn_lahir')
                    ->label('Tahun Lahir')
                    ->numeric()
                    ->minValue(1900)
                    ->maxValue(2100),

                TextInput::make('ayah')
                    ->label('Nama Ayah')
                    ->maxLength(120),

                TextInput::make('ibu')
                    ->label('Nama Ibu')
                    ->maxLength(120),

                TextInput::make('desa_kelurahan')
                    ->label('Desa/Kelurahan')
                    ->maxLength(120),

                TextInput::make('kecamatan')
                    ->label('Kecamatan')
                    ->maxLength(120),

                TextInput::make('kabupaten_kota')
                    ->label('Kabupaten/Kota')
                    ->maxLength(120),

                Textarea::make('alamat_lengkap')
                    ->label('Alamat Lengkap')
                    ->columnSpanFull(),

                TextInput::make('ijazah_nomor')
                    ->label('Nomor Ijazah')
                    ->maxLength(50),

                TextInput::make('ijazah_tahun')
                    ->label('Tahun Ijazah')
                    ->numeric()
                    ->minValue(1900)
                    ->maxValue(2100),

                Toggle::make('lulus')
                    ->label('Lulus/Alumni')
                    ->required(),
            ]);
    }
}
