<?php

namespace App\Filament\Resources\BoundedConcreteAreaLMPResource\Pages;

use App\Filament\Resources\BoundedConcreteAreaLMPResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBoundedConcreteAreaLMP extends EditRecord
{
    protected static string $resource = BoundedConcreteAreaLMPResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
