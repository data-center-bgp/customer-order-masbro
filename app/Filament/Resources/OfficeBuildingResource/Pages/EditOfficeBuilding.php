<?php

namespace App\Filament\Resources\OfficeBuildingResource\Pages;

use App\Filament\Resources\OfficeBuildingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOfficeBuilding extends EditRecord
{
    protected static string $resource = OfficeBuildingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
