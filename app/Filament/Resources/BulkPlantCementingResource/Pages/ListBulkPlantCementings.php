<?php

namespace App\Filament\Resources\BulkPlantCementingResource\Pages;

use App\Filament\Resources\BulkPlantCementingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBulkPlantCementings extends ListRecords
{
    protected static string $resource = BulkPlantCementingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
