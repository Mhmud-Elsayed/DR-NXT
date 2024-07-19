<?php

namespace App\Filament\Resources\MedicineUnitResource\Pages;

use App\Filament\Resources\MedicineUnitResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMedicineUnit extends EditRecord
{
    protected static string $resource = MedicineUnitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
