<?php
namespace App\Filament\Resources\Gurus\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;

class GuruTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('profil_url')
                    ->label('Foto Profil')
                    ->disk('local'),
                TextColumn::make('nama_lengkap')
                    ->label('Nama Lengkap')
                    ->searchable(),
                TextColumn::make('jenis_unit')
                    ->label('Unit'),
                TextColumn::make('nama_madrasah')
                    ->label('Madrasah'),
                TextColumn::make('tahun_pelajaran')
                    ->label('Tahun'),
                TextColumn::make('semester')
                    ->label('Semester'),
                TextColumn::make('kategori_personil')
                    ->label('Kategori'),
                TextColumn::make('status_kepegawaian')
                    ->label('Kepegawaian'),
                BooleanColumn::make('status_pns')
                    ->label('PNS'),
                BooleanColumn::make('guru_tetap')
                    ->label('Guru Tetap'),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
