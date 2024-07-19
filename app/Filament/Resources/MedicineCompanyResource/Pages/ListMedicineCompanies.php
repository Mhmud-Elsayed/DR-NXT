<?php

namespace App\Filament\Resources\MedicineCompanyResource\Pages;

use App\Filament\Resources\MedicineCompanyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMedicineCompanies extends ListRecords
{
    protected static string $resource = MedicineCompanyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
