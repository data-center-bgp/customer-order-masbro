<?php

namespace App\Filament\Resources\IndustrialSupplyForBoatResource\Pages;

use App\Filament\Resources\IndustrialSupplyForBoatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIndustrialSupplyForBoats extends ListRecords
{
    protected static string $resource = IndustrialSupplyForBoatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Add new data'),
        ];
    }
}
