<?php

namespace App\Filament\Resources\RayResource\Pages;

use App\Filament\Resources\RayResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRay extends EditRecord
{
    protected static string $resource = RayResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
