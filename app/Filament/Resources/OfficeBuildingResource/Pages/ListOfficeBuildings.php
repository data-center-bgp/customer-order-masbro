<?php

namespace App\Filament\Resources\OfficeBuildingResource\Pages;

use App\Filament\Resources\OfficeBuildingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOfficeBuildings extends ListRecords
{
    protected static string $resource = OfficeBuildingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Add new data'),
        ];
    }
}
