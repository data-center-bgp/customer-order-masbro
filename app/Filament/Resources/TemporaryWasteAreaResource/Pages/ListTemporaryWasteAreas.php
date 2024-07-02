<?php

namespace App\Filament\Resources\TemporaryWasteAreaResource\Pages;

use App\Filament\Resources\TemporaryWasteAreaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTemporaryWasteAreas extends ListRecords
{
    protected static string $resource = TemporaryWasteAreaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Add new data'),
        ];
    }
}
