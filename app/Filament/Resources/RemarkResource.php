<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RemarkResource\Pages;
use App\Filament\Resources\RemarkResource\RelationManagers;
use App\Models\Beneficiary;
use App\Models\Remark;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\Auth;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Carbon\Carbon;

class RemarkResource extends Resource
{
    protected static ?string $model = Remark::class;

    protected static ?string $navigationLabel = "Enquiry To Student";

    protected static ?string $navigationIcon = 'heroicon-o-phone';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Select::make('student_id')
                ->options(Beneficiary::all()->pluck('student_name','id'))->label('Student Name')->required()->reactive() // Make the select field reactive
                ->afterStateUpdated(function (callable $set, $state, $get) {
                    // Get the current student_id using $get
                    $studentId = $get('student_id');

                    // Fetch existing descriptions whenever the student_id changes
                    $set('history', self::getExistingDescriptions($studentId));
                }),
                Repeater::make('history')->label("Previous Remark")
                ->schema([
                    TextInput::make('staff_name')->label('Staff Name')->readOnly(),
                    TextInput::make('date')->label('Dated')->readOnly(),
                    Forms\Components\Textarea::make('remark')->label("Remarked")->readOnly()
                ])->disabled()->columnSpan('full'),



                // MarkdownEditor::make('description')->label('Description')
                // ->default(function(Remark $record){

                //     dd($record);
                //     $beneficiaries = Beneficiary::where('id', $record->student_id)->get();

                //     // Loop through each beneficiary and collect their 'remark' fields
                //     $remarks = $beneficiaries->pluck('remark');

                //     // Combine all the remarks into a single string
                //     return $remarks->implode("\n\n");  // Concatenate with new lines in between
                // })
                // ->disabled(),
                TextInput::make('staff_name') ->default(Auth::user()->name?? 'Guest Name')->readOnly(),
                MarkdownEditor::make('remark')->label('Add Remark')->required()->columnSpan('full'),

            ]);
    }


    protected static function getExistingDescriptions($studentId): array
{

 

    return Remark::where('student_id', $studentId) // Filter based on student_id
    ->get()
    ->map(function ($description) {

      
        return [
            'staff_name' => $description->staff_name,
            'remark' => $description->remark,
            'date' => Carbon::parse($description->created_at)->format('F j, Y, g:i A'),
        ];
    })
    ->toArray();
}
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('student_id'),
                Tables\Columns\TextColumn::make('student_id')->getStateUsing(function (Remark $record) {
                    // Assuming the User model has a posts relationship
                    $relatedValue = Beneficiary::where('id', $record->student_id)->select('student_name', 'student_address','guardian_name')
                    ->first();
                    return $relatedValue->student_name.", ".$relatedValue->guardian_name.", ".$relatedValue->student_address ?: 'Default Value';
                })->label('Student Info')->searchable(),
                Tables\Columns\TextColumn::make('staff_name')->searchable(),
                Tables\Columns\TextColumn::make('remark')->sortable(),
                

             
            ])->defaultSort('created_at','desc')
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
            'index' => Pages\ListRemarks::route('/'),
            'create' => Pages\CreateRemark::route('/create'),
            'edit' => Pages\EditRemark::route('/{record}/edit'),
        ];
    }
}
