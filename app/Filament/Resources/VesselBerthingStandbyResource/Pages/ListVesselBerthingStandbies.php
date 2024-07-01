<?php

namespace App\Filament\Resources\VesselBerthingStandbyResource\Pages;

use App\Filament\Resources\VesselBerthingStandbyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVesselBerthingStandbies extends ListRecords
{
    protected static string $resource = VesselBerthingStandbyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
