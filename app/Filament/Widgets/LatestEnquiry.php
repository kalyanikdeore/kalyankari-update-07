<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\EnquiryResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestEnquiry extends BaseWidget
{

    protected static ?int $sort = 2;
    protected int | string | array $columnSpan = 'full';
    protected static bool $isLazy = false;

    protected static ?string $heading = "Latest Enquiry";
    public function table(Table $table): Table
    {
        return $table
        ->query(EnquiryResource::getEloquentQuery())->defaultPaginationPageOption(5)->defaultSort('created_at','desc')
        ->columns([


            
            

            Tables\Columns\TextColumn::make('created_at')->label('Date')->dateTime('d-m-Y'),
            Tables\Columns\TextColumn::make('name'),
            Tables\Columns\TextColumn::make('email'),
            Tables\Columns\TextColumn::make('phone'),
            Tables\Columns\TextColumn::make('message'),
            Tables\Columns\TextColumn::make('purpose'),
         
        ]);
    }
}
