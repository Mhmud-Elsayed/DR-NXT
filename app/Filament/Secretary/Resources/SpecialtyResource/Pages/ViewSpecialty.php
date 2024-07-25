<?php

namespace App\Filament\Secretary\Resources\SpecialtyResource\Pages;

use App\Filament\Secretary\Resources\SpecialtyResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSpecialty extends ViewRecord
{
    protected static string $resource = SpecialtyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
