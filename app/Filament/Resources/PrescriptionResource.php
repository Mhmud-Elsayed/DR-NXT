<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PrescriptionResource\Pages;
use App\Filament\Resources\PrescriptionResource\RelationManagers;
use App\Models\Prescription;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PrescriptionResource extends Resource
{
    protected static ?string $model = Prescription::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Select::make('user_id')
            ->relationship('user', 'name')
            ->searchable()
            ->getSearchResultsUsing(fn (string $search) => User::where('phone', 'like', "%{$search}%")
                                                                ->orWhere('name', 'like', "%{$search}%")
                                                                ->limit(50)
                                                                ->pluck('name', 'id')
                                                                ->toArray())
            ->required(),
            Forms\Components\Select::make('branch_id')
                ->relationship('branch', 'name')
                ->searchable()
                ->required(),
            Forms\Components\Select::make('doctor_id')
                ->relationship('doctor', 'name')
                ->searchable()
                ->required(),
            Forms\Components\Textarea::make('note')
                ->nullable(),
            Forms\Components\Repeater::make('medicines')
                ->relationship('medicines')
                ->schema([
                    Forms\Components\Select::make('medicine_id')
                        ->relationship('medicine', 'en_name')
                        ->searchable()
                        ->required(),
                    Forms\Components\TextInput::make('dosage')->required(),
                    Forms\Components\TextInput::make('duration')->required(),
                    Forms\Components\TextInput::make('note')->nullable(),
                ])
                ->columns(2),
                Forms\Components\Repeater::make('tests')
                    ->relationship('tests')
                    ->schema([
                        Forms\Components\Select::make('test_id')
                            ->relationship('test', 'name')
                            ->searchable()
                            ->required(),
                        Forms\Components\TextInput::make('note')->nullable(),
                    ])
                    ->columns(2),
                Forms\Components\Repeater::make('rays')
                    ->relationship('rays')
                    ->schema([
                        Forms\Components\Select::make('ray_id')
                            ->relationship('ray', 'name')
                            ->searchable()
                            ->required(),
                        Forms\Components\TextInput::make('note')->nullable(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->searchable()->sortable()->label('User'),
                Tables\Columns\TextColumn::make('user.phone')->searchable()->sortable()->label('phone'),
                Tables\Columns\TextColumn::make('branch.name')->searchable()->sortable()->label('Branch'),

                Tables\Columns\TextColumn::make('doctor.name')->searchable()->sortable()->label('Doctor'),
                Tables\Columns\TextColumn::make('note'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                // your filters
            ])
            ->actions([
                // Define row-specific actions
                Action::make('print')
                    ->label('Print')
                    ->url(fn ($record) => route('prescriptions.print', ['prescription' => $record->id]))
                    ->icon('heroicon-o-printer')
                    ->color('secondary'),
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                ])
                ->bulkActions([
                    Tables\Actions\BulkActionGroup::make([
                        Tables\Actions\DeleteBulkAction::make(),
                    ]),
                ]);
        }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPrescriptions::route('/'),
            'create' => Pages\CreatePrescription::route('/create'),
            'edit' => Pages\EditPrescription::route('/{record}/edit'),
        ];
    }
}
