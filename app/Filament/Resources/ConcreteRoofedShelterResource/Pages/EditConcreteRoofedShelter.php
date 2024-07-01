<?php

namespace App\Filament\Resources\ConcreteRoofedShelterResource\Pages;

use App\Filament\Resources\ConcreteRoofedShelterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditConcreteRoofedShelter extends EditRecord
{
    protected static string $resource = ConcreteRoofedShelterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
