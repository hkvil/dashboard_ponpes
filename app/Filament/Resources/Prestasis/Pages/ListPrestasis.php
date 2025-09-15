<?php
namespace App\Filament\Resources\Prestasis\Pages;

use App\Filament\Resources\Prestasis\PrestasiResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\CreateAction;

class ListPrestasis extends ListRecords
{
    protected static string $resource = PrestasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
