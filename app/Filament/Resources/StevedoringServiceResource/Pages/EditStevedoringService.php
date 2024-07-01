<?php

namespace App\Filament\Resources\StevedoringServiceResource\Pages;

use App\Filament\Resources\StevedoringServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStevedoringService extends EditRecord
{
    protected static string $resource = StevedoringServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
