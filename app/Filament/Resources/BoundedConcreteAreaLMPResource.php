<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BoundedConcreteAreaLMPResource\Pages;
use App\Filament\Resources\BoundedConcreteAreaLMPResource\RelationManagers;
use App\Models\BoundedConcreteAreaLMP;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BoundedConcreteAreaLMPResource extends Resource
{
    protected static ?string $model = BoundedConcreteAreaLMP::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('area_m2')
                    ->required()
                    ->numeric(),
                Forms\Components\DatePicker::make('start_rent')
                    ->required(),
                Forms\Components\DatePicker::make('end_rent')
                    ->required(),
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
                Tables\Columns\TextColumn::make('area_m2')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('start_rent')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_rent')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('deleted_at')
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
            'index' => Pages\ListBoundedConcreteAreaLMPS::route('/'),
            'create' => Pages\CreateBoundedConcreteAreaLMP::route('/create'),
            'edit' => Pages\EditBoundedConcreteAreaLMP::route('/{record}/edit'),
        ];
    }
}
