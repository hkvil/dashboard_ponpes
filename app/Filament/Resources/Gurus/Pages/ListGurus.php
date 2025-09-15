<?php
namespace App\Filament\Resources\Gurus\Pages;

use App\Filament\Resources\Gurus\GuruResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\CreateAction;

class ListGurus extends ListRecords
{
    protected static string $resource = GuruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
