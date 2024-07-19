<?php

namespace App\Filament\Resources\MedicineUnitResource\Pages;

use App\Filament\Resources\MedicineUnitResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMedicineUnit extends ViewRecord
{
    protected static string $resource = MedicineUnitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
