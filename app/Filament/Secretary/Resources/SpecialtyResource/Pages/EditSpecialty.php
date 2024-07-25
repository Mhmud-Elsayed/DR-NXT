<?php

namespace App\Filament\Secretary\Resources\SpecialtyResource\Pages;

use App\Filament\Secretary\Resources\SpecialtyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSpecialty extends EditRecord
{
    protected static string $resource = SpecialtyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
