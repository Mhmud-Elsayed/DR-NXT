<?php

namespace App\Filament\Resources\RayResource\Pages;

use App\Filament\Resources\RayResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewRay extends ViewRecord
{
    protected static string $resource = RayResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
