<?php

namespace App\Filament\Secretary\Resources\UserResource\Pages;

use App\Filament\Secretary\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
