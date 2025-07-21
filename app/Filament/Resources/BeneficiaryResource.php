<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeneficiaryResource\Pages;
use App\Filament\Resources\BeneficiaryResource\RelationManagers;
use App\Models\Beneficiary;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BeneficiaryResource extends Resource
{
    protected static ?string $model = Beneficiary::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('student_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('student_address')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('guardian_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('guardian_mobile')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_mobile')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('course_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('current_term')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('college_name_address')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('amt_per_annum')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('financial_yr')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('student_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('guardian_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('guardian_mobile')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_mobile')
                    ->searchable(),
                Tables\Columns\TextColumn::make('course_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('current_term')
                    ->searchable(),
                Tables\Columns\TextColumn::make('amt_per_annum')
                    ->searchable(),
                Tables\Columns\TextColumn::make('financial_yr')
                    ->searchable(),
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
            'index' => Pages\ListBeneficiaries::route('/'),
            'create' => Pages\CreateBeneficiary::route('/create'),
            'edit' => Pages\EditBeneficiary::route('/{record}/edit'),
        ];
    }
}
