<?php

namespace App\Filament\Resources\MedicineCompanyResource\Pages;

use App\Filament\Resources\MedicineCompanyResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMedicineCompany extends ViewRecord
{
    protected static string $resource = MedicineCompanyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
