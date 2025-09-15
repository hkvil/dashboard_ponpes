<?php
namespace App\Filament\Resources\Prestasis\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;

class PrestasiTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama Lomba')
                    ->searchable(),
                TextColumn::make('kelas')
                    ->label('Kelas'),
                TextColumn::make('bidang_lomba')
                    ->label('Bidang'),
                TextColumn::make('penyelenggara')
                    ->label('Penyelenggara'),
                BadgeColumn::make('tingkat')
                    ->label('Tingkat'),
                TextColumn::make('peringkat')
                    ->label('Peringkat'),
                BadgeColumn::make('kategori')
                    ->label('Kategori'),
                TextColumn::make('tahun')
                    ->label('Tahun'),
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
