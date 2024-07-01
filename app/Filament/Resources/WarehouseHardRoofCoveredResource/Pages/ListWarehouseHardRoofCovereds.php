<?php

namespace App\Filament\Resources\WarehouseHardRoofCoveredResource\Pages;

use App\Filament\Resources\WarehouseHardRoofCoveredResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWarehouseHardRoofCovereds extends ListRecords
{
    protected static string $resource = WarehouseHardRoofCoveredResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
