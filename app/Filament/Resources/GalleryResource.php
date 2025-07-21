<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Filament\Resources\GalleryResource\RelationManagers;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
         return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->directory('gallery-images')
                    ->preserveFilenames()
                    ->maxSize(2048)
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\Select::make('year')
                    ->options(function() {
                        $years = range(date('Y'), 2020); // From current year to 2020
                        return array_combine($years, $years);
                    })
                    ->required(),

                Forms\Components\Toggle::make('isVisible')
                    ->default(true)
                    ->required(),
            ]);
    }


    public static function table(Table $table): Table
    {
          return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->disk('public')
                    ->width(100)
                    ->height(100)
                    ->toggleable(),

                Tables\Columns\TextColumn::make('year')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\IconColumn::make('isVisible')
                    ->boolean()
                    ->label('Visible')
                    ->toggleable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('year')
                    ->options(function() {
                        $years = Gallery::select('year')->distinct()->pluck('year', 'year');
                        return $years->toArray();
                    }),

                Tables\Filters\TernaryFilter::make('isVisible')
                    ->label('Visibility')
                    ->trueLabel('Only visible')
                    ->falseLabel('Only hidden')
                    ->nullable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->defaultSort('year', 'desc');
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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
