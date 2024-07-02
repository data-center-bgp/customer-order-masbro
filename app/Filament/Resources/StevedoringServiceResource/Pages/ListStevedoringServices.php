<?php

namespace App\Filament\Resources\StevedoringServiceResource\Pages;

use App\Filament\Resources\StevedoringServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStevedoringServices extends ListRecords
{
    protected static string $resource = StevedoringServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Add new data'),
        ];
    }
}
