<?php

namespace App\Filament\Resources\SingleTonnageLiftingCargodoringInterStorageResource\Pages;

use App\Filament\Resources\SingleTonnageLiftingCargodoringInterStorageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSingleTonnageLiftingCargodoringInterStorage extends EditRecord
{
    protected static string $resource = SingleTonnageLiftingCargodoringInterStorageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
