<?php
namespace App\Filament\Resources\Pelanggarans\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;

class PelanggaranTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('jenis_pelanggaran')
                    ->label('Jenis Pelanggaran')
                    ->searchable(),
                TextColumn::make('poin')
                    ->label('Poin'),
                TextColumn::make('total_poin')
                    ->label('Total Poin'),
                TextColumn::make('keterangan')
                    ->label('Keterangan'),
                TextColumn::make('tanggal')
                    ->label('Tanggal'),
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
