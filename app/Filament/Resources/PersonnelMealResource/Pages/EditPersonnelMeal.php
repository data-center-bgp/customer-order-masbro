<?php

namespace App\Filament\Resources\PersonnelMealResource\Pages;

use App\Filament\Resources\PersonnelMealResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPersonnelMeal extends EditRecord
{
    protected static string $resource = PersonnelMealResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
