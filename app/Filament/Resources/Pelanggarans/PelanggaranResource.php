<?php

namespace App\Filament\Resources\Pelanggarans;

use App\Filament\Resources\Pelanggarans\Pages\CreatePelanggaran;
use App\Filament\Resources\Pelanggarans\Pages\EditPelanggaran;
use App\Filament\Resources\Pelanggarans\Pages\ListPelanggarans;
use App\Models\Pelanggaran;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use App\Filament\Resources\Pelanggarans\Tables\PelanggaranTable;

class PelanggaranResource extends Resource
{
    protected static ?string $model = Pelanggaran::class;

    protected static ?string $navigationLabel = 'Pelanggaran';
    protected static string|\UnitEnum|null $navigationGroup = 'Data';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedExclamationCircle;

    public static function form(Schema $schema): Schema
    {
        return \App\Filament\Resources\Pelanggarans\Schemas\PelanggaranForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PelanggaranTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPelanggarans::route('/'),
            'create' => CreatePelanggaran::route('/create'),
            'edit' => EditPelanggaran::route('/{record}/edit'),
        ];
    }
}
