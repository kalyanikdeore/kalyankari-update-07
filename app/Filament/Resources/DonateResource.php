<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DonateResource\Pages;
use App\Filament\Resources\DonateResource\RelationManagers;
use App\Models\Donate;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\Repeater;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DonateResource extends Resource
{
    protected static ?string $model = Donate::class;

    protected static ?string $navigationGroup = 'Content Management System';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                  Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('list_title')
                    ->required()
                    ->maxLength(255),

                    Repeater::make('list')->label('List Items')
                    ->schema([
                        Forms\Components\TextInput::make('list_item')->label('item')->required(),

                    ])->columnSpan(1),
                Forms\Components\Toggle::make('isVisible')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                    Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('list_title')
                    ->searchable(),
                Tables\Columns\IconColumn::make('isVisible')
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
            'index' => Pages\ListDonates::route('/'),
            'create' => Pages\CreateDonate::route('/create'),
            'edit' => Pages\EditDonate::route('/{record}/edit'),
        ];
    }
}
