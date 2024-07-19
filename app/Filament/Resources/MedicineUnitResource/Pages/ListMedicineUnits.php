<?php

namespace App\Filament\Resources\MedicineUnitResource\Pages;

use App\Filament\Resources\MedicineUnitResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMedicineUnits extends ListRecords
{
    protected static string $resource = MedicineUnitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
