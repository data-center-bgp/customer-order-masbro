<?php

namespace App\Filament\Resources\AccomodationStaffResource\Pages;

use App\Filament\Resources\AccomodationStaffResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAccomodationStaff extends ListRecords
{
    protected static string $resource = AccomodationStaffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
