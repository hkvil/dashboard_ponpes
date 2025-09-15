<?php
namespace App\Filament\Resources\Pelanggarans\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;

class PelanggaranForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('id_santri')
                    ->label('Santri')
                    ->relationship('santri', 'nama_santri')
                    ->required(),

                TextInput::make('jenis_pelanggaran')
                    ->label('Jenis Pelanggaran'),

                TextInput::make('poin')
                    ->label('Poin')
                    ->numeric(),

                TextInput::make('total_poin')
                    ->label('Total Poin')
                    ->numeric(),

                TextInput::make('keterangan')
                    ->label('Keterangan')
                    ->maxLength(255),

                DatePicker::make('tanggal')
                    ->label('Tanggal'),
            ]);
    }
}
