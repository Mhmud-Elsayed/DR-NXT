<?php

namespace App\Filament\Resources\RayResource\Pages;

use App\Filament\Resources\RayResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRays extends ListRecords
{
    protected static string $resource = RayResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
