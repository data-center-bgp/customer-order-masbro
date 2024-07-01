<?php

namespace App\Filament\Resources\VesselBerthingStandbyResource\Pages;

use App\Filament\Resources\VesselBerthingStandbyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVesselBerthingStandby extends EditRecord
{
    protected static string $resource = VesselBerthingStandbyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
