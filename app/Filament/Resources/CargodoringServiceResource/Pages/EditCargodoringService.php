<?php

namespace App\Filament\Resources\CargodoringServiceResource\Pages;

use App\Filament\Resources\CargodoringServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCargodoringService extends EditRecord
{
    protected static string $resource = CargodoringServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
