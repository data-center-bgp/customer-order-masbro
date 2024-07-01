<?php

namespace App\Filament\Resources\OpenYardAreaResource\Pages;

use App\Filament\Resources\OpenYardAreaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOpenYardArea extends EditRecord
{
    protected static string $resource = OpenYardAreaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
