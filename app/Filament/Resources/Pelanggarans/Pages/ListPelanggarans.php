<?php
namespace App\Filament\Resources\Pelanggarans\Pages;

use App\Filament\Resources\Pelanggarans\PelanggaranResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\CreateAction;

class ListPelanggarans extends ListRecords
{
    protected static string $resource = PelanggaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
