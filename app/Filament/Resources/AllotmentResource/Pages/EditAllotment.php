<?php

namespace App\Filament\Resources\AllotmentResource\Pages;

use App\Filament\Resources\AllotmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAllotment extends EditRecord
{
    protected static string $resource = AllotmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
