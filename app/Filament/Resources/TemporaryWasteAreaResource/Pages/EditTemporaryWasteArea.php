<?php

namespace App\Filament\Resources\TemporaryWasteAreaResource\Pages;

use App\Filament\Resources\TemporaryWasteAreaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTemporaryWasteArea extends EditRecord
{
    protected static string $resource = TemporaryWasteAreaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
