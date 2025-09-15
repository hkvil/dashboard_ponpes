<?php
namespace App\Filament\Resources\Prestasis\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class PrestasiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('id_santri')
                    ->label('Santri')
                    ->relationship('santri', 'nama_santri')
                    ->required(),

                TextInput::make('nama')
                    ->label('Nama Lomba/Kompetisi'),

                TextInput::make('kelas')
                    ->label('Kelas'),

                TextInput::make('bidang_lomba')
                    ->label('Bidang Lomba'),

                TextInput::make('penyelenggara')
                    ->label('Penyelenggara'),

                Select::make('tingkat')
                    ->label('Tingkat Lomba')
                    ->options([
                        'SEKOLAH' => 'Sekolah',
                        'KECAMATAN' => 'Kecamatan',
                        'KABUPATEN' => 'Kabupaten',
                        'PROVINSI' => 'Provinsi',
                        'NASIONAL' => 'Nasional',
                        'INTERNASIONAL' => 'Internasional',
                    ]),

                TextInput::make('peringkat')
                    ->label('Peringkat')
                    ->numeric(),

                Select::make('kategori')
                    ->label('Kategori Lomba')
                    ->options([
                        'AKADEMIK' => 'Akademik',
                        'NONAKADEMIK' => 'Nonakademik',
                        'OLAHRAGA' => 'Olahraga',
                        'SENI' => 'Seni',
                        'AGAMA' => 'Agama',
                        'LAINNYA' => 'Lainnya',
                    ]),

                TextInput::make('tahun')
                    ->label('Tahun')
                    ->numeric(),
            ]);
    }
}
