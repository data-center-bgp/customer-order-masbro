<?php

namespace App\Filament\Resources\PersonnelMealResource\Pages;

use App\Filament\Resources\PersonnelMealResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPersonnelMeals extends ListRecords
{
    protected static string $resource = PersonnelMealResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Add new data'),
        ];
    }
}
