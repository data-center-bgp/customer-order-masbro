<?php

namespace App\Filament\Resources\WharfageBulkResource\Pages;

use App\Filament\Resources\WharfageBulkResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWharfageBulks extends ListRecords
{
    protected static string $resource = WharfageBulkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
