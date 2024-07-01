<?php

namespace App\Filament\Resources\BulkPlantCementingResource\Pages;

use App\Filament\Resources\BulkPlantCementingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBulkPlantCementing extends EditRecord
{
    protected static string $resource = BulkPlantCementingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
