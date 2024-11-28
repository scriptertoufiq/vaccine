<?php

namespace App\Filament\Resources\AllotmentResource\Pages;

use App\Filament\Resources\AllotmentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAllotment extends CreateRecord
{
    protected static string $resource = AllotmentResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        return $data;
    }
}
