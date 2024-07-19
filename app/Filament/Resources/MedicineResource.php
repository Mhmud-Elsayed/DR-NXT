<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MedicineResource\Pages;
use App\Filament\Resources\MedicineResource\RelationManagers;
use App\Models\Medicine;
use App\Models\MedicineCompany;
use App\Models\MedicineUnit;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Laravel\SerializableClosure\Serializers\Native;

class MedicineResource extends Resource
{
    protected static ?string $model = Medicine::class;

    protected static ?string $navigationIcon = 'heroicon-o-beaker';
    protected static ?string $navigationGroup  = '💊 medicine';
    protected static ?int $navigationSort = 1;



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('ar_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('en_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('scientific_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                Forms\Components\TextInput::make('usage')
                    ->required()
                    ->maxLength(255),
                    Select::make('medicine_company_id')
                    ->label('Medicine Company')
                    ->options(MedicineCompany::all()->pluck('name', 'id')) // Adjust according to your needs
                    ->required()
                    ->searchable()
                    ->Native('false'),
                    Select::make('medicine_unit_id')
                    ->label('Medicine unit')
                    ->options(MedicineUnit::all()->pluck('name', 'id')) // Adjust according to your needs
                    ->required()
                    ->searchable()
                    ->Native('false'),
                Forms\Components\TextInput::make('units_number')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('barcode')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('ar_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('en_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('scientific_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('usage')
                    ->searchable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMedicines::route('/'),
            'create' => Pages\CreateMedicine::route('/create'),
            'view' => Pages\ViewMedicine::route('/{record}'),
            'edit' => Pages\EditMedicine::route('/{record}/edit'),
        ];
    }
}
