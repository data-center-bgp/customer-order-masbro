<?php

namespace App\Filament\Resources\BoundedConcreteAreaLMPResource\Pages;

use App\Filament\Resources\BoundedConcreteAreaLMPResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBoundedConcreteAreaLMPS extends ListRecords
{
    protected static string $resource = BoundedConcreteAreaLMPResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Add new data'),
        ];
    }
}
