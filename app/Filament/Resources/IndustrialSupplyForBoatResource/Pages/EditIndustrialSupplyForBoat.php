<?php

namespace App\Filament\Resources\IndustrialSupplyForBoatResource\Pages;

use App\Filament\Resources\IndustrialSupplyForBoatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIndustrialSupplyForBoat extends EditRecord
{
    protected static string $resource = IndustrialSupplyForBoatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
