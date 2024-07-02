<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StevedoringServiceResource\Pages;
use App\Models\StevedoringService;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class StevedoringServiceResource extends Resource
{
    protected static ?string $model = StevedoringService::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
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
            'index' => Pages\ListStevedoringServices::route('/'),
            'create' => Pages\CreateStevedoringService::route('/create'),
            'edit' => Pages\EditStevedoringService::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'Stevedoring Service: for Loading and Unloading Cargo on Vessel';
    }

    public static function getLabel(): ?string
    {
        return 'Stevedoring Service: for Loading and Unloading Cargo on Vessel';
    }

    protected static ?string $navigationGroup = 'Jetty/Quay/Wharf';
}
