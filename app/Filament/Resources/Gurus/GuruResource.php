<?php

namespace App\Filament\Resources\Gurus;

use App\Filament\Resources\Gurus\Pages\CreateGuru;
use App\Filament\Resources\Gurus\Pages\EditGuru;
use App\Filament\Resources\Gurus\Pages\ListGurus;
use App\Models\Guru;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GuruResource extends Resource
{
    protected static ?string $model = Guru::class;

    protected static ?string $navigationLabel = 'Guru';
    protected static string|\UnitEnum|null $navigationGroup = 'Data';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserGroup;

    public static function form(Schema $schema): Schema
    {
        return \App\Filament\Resources\Gurus\Schemas\GuruForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return $table;
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
            'index' => ListGurus::route('/'),
            'create' => CreateGuru::route('/create'),
            'edit' => EditGuru::route('/{record}/edit'),
        ];
    }
}
