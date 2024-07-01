<?php

namespace App\Filament\Resources\CargodoringServiceResource\Pages;

use App\Filament\Resources\CargodoringServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCargodoringServices extends ListRecords
{
    protected static string $resource = CargodoringServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
