<?php

namespace App\Filament\Resources\AllotmentResource\Pages;

use App\Filament\Resources\AllotmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAllotments extends ListRecords
{
    protected static string $resource = AllotmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
