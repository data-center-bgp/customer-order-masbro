<?php

namespace App\Filament\Resources\VesselBerthingOperationResource\Pages;

use App\Filament\Resources\VesselBerthingOperationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVesselBerthingOperations extends ListRecords
{
    protected static string $resource = VesselBerthingOperationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
