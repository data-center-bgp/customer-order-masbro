<?php

namespace App\Filament\Resources\AccomodationStaffResource\Pages;

use App\Filament\Resources\AccomodationStaffResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAccomodationStaff extends EditRecord
{
    protected static string $resource = AccomodationStaffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
