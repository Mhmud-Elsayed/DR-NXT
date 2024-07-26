<?php

namespace App\Filament\Secretary\Resources;

use App\Filament\Secretary\Resources\BookingResource\Pages;
use App\Filament\Secretary\Resources\BookingResource\RelationManagers;
use App\Http\Middleware\Doctor;
use App\Models\Booking;
use App\Models\BookingType;
use App\Models\Branch;
use App\Models\Doctor as ModelsDoctor;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('date')
                ->required()
                ->default(now()),
                    Forms\Components\Select::make('booking_type_id')
                    ->label('Booking Type')
                    ->searchable()
                    ->options(function () {
                        return BookingType::pluck('name', 'id');
                    })
                    ->required(),
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
                    ->label('branch')
                    ->searchable()
                    ->options(function () {
                        return Branch::pluck('name', 'id');
                    })
                    ->required(),
                Forms\Components\Select::make('doctor_id')
                ->label('doctor')
                ->searchable()
                ->options(function () {
                    return \App\Models\Doctor ::pluck('name', 'id');
                })
                ->required(),
                Forms\Components\Toggle::make('status')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('date')
                    ->date()
                    ->sortable(),

                    Tables\Columns\TextColumn::make('BookingType.name')->searchable()->sortable()->label('booking type'),


                    Tables\Columns\TextColumn::make('user.name')->searchable()->sortable()->label('User'),

                    Tables\Columns\TextColumn::make('user.phone')->searchable()->sortable()->label('phone'),


                    Tables\Columns\TextColumn::make('branch.name')->searchable()->sortable()->label('Branch'),

                    Tables\Columns\TextColumn::make('doctor.name')->searchable()->sortable()->label('Doctor'),

                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
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
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'view' => Pages\ViewBooking::route('/{record}'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}
