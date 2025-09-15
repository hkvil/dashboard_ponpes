<?php

namespace App\Filament\Resources\Prestasis;

use App\Filament\Resources\Prestasis\Pages\CreatePrestasi;
use App\Filament\Resources\Prestasis\Pages\EditPrestasi;
use App\Filament\Resources\Prestasis\Pages\ListPrestasis;
use App\Models\Prestasi;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use App\Filament\Resources\Prestasis\Tables\PrestasiTable;

class PrestasiResource extends Resource
{
    protected static ?string $model = Prestasi::class;

    protected static ?string $navigationLabel = 'Prestasi';
    protected static string|\UnitEnum|null $navigationGroup = 'Data';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedTrophy;

    public static function form(Schema $schema): Schema
    {
        return \App\Filament\Resources\Prestasis\Schemas\PrestasiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PrestasiTable::configure($table);
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
            'index' => ListPrestasis::route('/'),
            'create' => CreatePrestasi::route('/create'),
            'edit' => EditPrestasi::route('/{record}/edit'),
        ];
    }
}
