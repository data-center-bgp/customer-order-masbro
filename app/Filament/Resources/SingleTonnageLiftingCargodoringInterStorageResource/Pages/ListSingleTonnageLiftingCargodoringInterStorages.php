<?php

namespace App\Filament\Resources\SingleTonnageLiftingCargodoringInterStorageResource\Pages;

use App\Filament\Resources\SingleTonnageLiftingCargodoringInterStorageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSingleTonnageLiftingCargodoringInterStorages extends ListRecords
{
    protected static string $resource = SingleTonnageLiftingCargodoringInterStorageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Add new data'),
        ];
    }
}
