<?php

namespace App\Filament\Resources\OpenYardAreaResource\Pages;

use App\Filament\Resources\OpenYardAreaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOpenYardAreas extends ListRecords
{
    protected static string $resource = OpenYardAreaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
