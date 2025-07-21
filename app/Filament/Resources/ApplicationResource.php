<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApplicationResource\Pages;
use App\Filament\Resources\ApplicationResource\RelationManagers;
use App\Models\Application;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Infolists;
use Filament\Infolists\Infolist;

use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ApplicationResource extends Resource
{
    protected static ?string $model = Application::class;

    protected static ?string $navigationLabel = "Students Application";

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';


   public static function canCreate(): bool
    {
        return false;
    }
    

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('student_fullname')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_dob')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_gender')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_mobile')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_aadhar')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_country')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_state')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_city')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_zip')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_photo')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_sign')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('student_aadhar_card')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('parent_fullname')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('parent_mobile')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('parent_country')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('parent_state')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('parent_city')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('parent_address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('parent_zip')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('parent_source_income')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('parent_income')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('parent_income_cert')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('is_ssc')
                    ->required(),
                Forms\Components\TextInput::make('obtain_mark_ssc')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('total_mark_ssc')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('percentage_ssc')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('current_std_below_ssc')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('specify_medium_below_ssc')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('current_fee_structure_below_ssc')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('is_hsc')
                    ->required(),
                Forms\Components\TextInput::make('obtain_mark_hsc')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('total_mark_hsc')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('percentage_hsc')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('current_std_hsc_course')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('specify_hsc_course_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('current_hsc_term')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('current_hsc_term_fee_structure')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('is_graduate')
                    ->required(),
                Forms\Components\TextInput::make('obtain_mark_graduate')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('total_mark_graduate')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('percentage_graduate')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('graduate_course')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('specify_field_subject_graduate')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('current_year_graduate')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('current_fee_structure_below_graduate')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('is_post_graduate')
                    ->required()
                    ->maxLength(255)
                    ->default(0),
                Forms\Components\TextInput::make('obtain_mark_post_graduate')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('total_mark_post_graduate')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('percentage_post_graduate')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('post_graduate_course')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('specify_field_subject_post_graduate')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('current_year_post_graduate')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('current_fee_structure_below_post_graduate')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('dignitary_recommendation')
                    ->required(),
                Forms\Components\Toggle::make('community_recommendation')
                    ->required(),
                Forms\Components\Toggle::make('family_benefit_status')
                    ->required(),
                Forms\Components\TextInput::make('family_benefit_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('have_benefit_before_status')
                    ->required(),
                Forms\Components\TextInput::make('specify_have_benefit_yr')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('previous_yr_cert')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ssc_cert')
                    ->required()
                    ->maxLength(255)
                    ->default(0),
                Forms\Components\TextInput::make('hsc_cert')
                    ->required()
                    ->maxLength(255)
                    ->default(0),
                Forms\Components\TextInput::make('graduate_cert')
                    ->required()
                    ->maxLength(255)
                    ->default(0),
                Forms\Components\TextInput::make('recommendation_cert')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('college_cert_with_fee_structure')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('other_docs_cert')
                    ->required()
                    ->maxLength(255)
                    ->default(0),
                Forms\Components\TextInput::make('loan_amt_need')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('consent')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('declaration')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
     
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('student_photo'),
                Tables\Columns\TextColumn::make('student_fullname')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_dob')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_gender')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_mobile')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_aadhar')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_country')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_state')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_zip')
                    ->searchable(),
                Tables\Columns\TextColumn::make('student_sign')
                    ->searchable(),
                Tables\Columns\TextColumn::    make('student_aadhar_card')
                ->label('Aadhar Card')
                ->formatStateUsing(function ($record) {
                    $base_url = "https://kalyankaripratishtan.demovoting.com/storage/";
                    $document = $record->student_aadhar_card;
                    $doc_url = $base_url.$document." ";
                    return $document?'<a href='.$doc_url.'target="_blank">View Document</a>' : 'No document';
                })
                ->html(),
                Tables\Columns\TextColumn::make('parent_fullname')
                    ->searchable(),
                Tables\Columns\TextColumn::make('parent_mobile')
                    ->searchable(),
                Tables\Columns\TextColumn::make('parent_country')
                    ->searchable(),
                Tables\Columns\TextColumn::make('parent_state')
                    ->searchable(),
                Tables\Columns\TextColumn::make('parent_city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('parent_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('parent_zip')
                    ->searchable(),
                Tables\Columns\TextColumn::make('parent_source_income')
                    ->searchable(),
                Tables\Columns\TextColumn::make('parent_income')
                    ->searchable(),
                   
                Tables\Columns\TextColumn:: make('parent_income_cert')
                ->label('Income_certificate')
                ->formatStateUsing(function ($record) {
                    $base_url = "https://kalyankaripratishtan.demovoting.com/storage/";
                    $document = $record->parent_income_cert;
                    $doc_url = $base_url.$document." ";
                    return $document?'<a href='.$doc_url.'target="_blank">View Document</a>' : 'No document';
                })
                ->html(),
                Tables\Columns\IconColumn::make('is_ssc')
                    ->boolean(),
                Tables\Columns\TextColumn::make('obtain_mark_ssc')
                    ->searchable(),
                Tables\Columns\TextColumn::make('total_mark_ssc')
                    ->searchable(),
                Tables\Columns\TextColumn::make('percentage_ssc')
                    ->searchable(),
                Tables\Columns\TextColumn::make('current_std_below_ssc')
                    ->searchable(),
                Tables\Columns\TextColumn::make('specify_medium_below_ssc')
                    ->searchable(),
                Tables\Columns\TextColumn::make('current_fee_structure_below_ssc')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_hsc')
                    ->boolean(),
                Tables\Columns\TextColumn::make('obtain_mark_hsc')
                    ->searchable(),
                Tables\Columns\TextColumn::make('total_mark_hsc')
                    ->searchable(),
                Tables\Columns\TextColumn::make('percentage_hsc')
                    ->searchable(),
                Tables\Columns\TextColumn::make('current_std_hsc_course')
                    ->searchable(),
                Tables\Columns\TextColumn::make('specify_hsc_course_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('current_hsc_term')
                    ->searchable(),
                Tables\Columns\TextColumn::make('current_hsc_term_fee_structure')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_graduate')
                    ->boolean(),
                Tables\Columns\TextColumn::make('obtain_mark_graduate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('total_mark_graduate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('percentage_graduate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('graduate_course')
                    ->searchable(),
                Tables\Columns\TextColumn::make('specify_field_subject_graduate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('current_year_graduate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('current_fee_structure_below_graduate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('is_post_graduate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('obtain_mark_post_graduate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('total_mark_post_graduate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('percentage_post_graduate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('post_graduate_course')
                    ->searchable(),
                Tables\Columns\TextColumn::make('specify_field_subject_post_graduate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('current_year_post_graduate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('current_fee_structure_below_post_graduate')
                    ->searchable(),
                Tables\Columns\IconColumn::make('dignitary_recommendation')
                    ->boolean(),
                Tables\Columns\IconColumn::make('community_recommendation')
                    ->boolean(),
                Tables\Columns\IconColumn::make('family_benefit_status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('family_benefit_name')
                    ->searchable(),
                Tables\Columns\IconColumn::make('have_benefit_before_status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('specify_have_benefit_yr')
                    ->searchable(),
                Tables\Columns\TextColumn::
                make('previous_yr_cert')
                ->label('Previous Year Certificate')
                ->formatStateUsing(function ($record) {
                    $base_url = "https://kalyankaripratishtan.demovoting.com/storage/";
                    $document = $record->previous_yr_cert;
                    $doc_url = $base_url.$document." ";
                    return $document?'<a href='.$doc_url.'target="_blank">View Document</a>' : 'No document';
                })
                ->html(),
                Tables\Columns\TextColumn:: make('ssc_cert')
                ->label('SSC Certificate')
                ->formatStateUsing(function ($record) {
                    $base_url = "https://kalyankaripratishtan.demovoting.com/storage/";
                    $document = ($record->ssc_cert=='not specify')?0:$record->ssc_cert;
                    $doc_url = $base_url.$document." ";
                    return $document?'<a href='.$doc_url.'target="_blank">View Document</a>' : 'No document';
                })
                ->html(),
                Tables\Columns\TextColumn::make('hsc_cert')
                ->label('HSC Certificate')
                ->formatStateUsing(function ($record) {
                    $base_url = "https://kalyankaripratishtan.demovoting.com/storage/";
                    $document = ($record->hsc_cert=='not specify')?0:$record->hsc_cert;
                    $doc_url = $base_url.$document." ";
                    return $document?'<a href='.$doc_url.'target="_blank">View Document</a>' : 'No document';
                })
                ->html(),
                Tables\Columns\TextColumn::make('graduate_cert')
                ->label('Graduate Certificate')
                ->formatStateUsing(function ($record) {
                    $base_url = "https://kalyankaripratishtan.demovoting.com/storage/";
                    $document = ($record->graduate_cert=='not specify')?0:$record->graduate_cert;
                    $doc_url = $base_url.$document." ";
                    return $document?'<a href='.$doc_url.'target="_blank">View Document</a>' : 'No document';
                })
                ->html(),
                Tables\Columns\TextColumn::make('recommendation_cert')
                ->label('Recommendation Certificate')
                ->formatStateUsing(function ($record) {
                    $base_url = "https://kalyankaripratishtan.demovoting.com/storage/";
                    $document = ($record->recommendation_cert=='not specify')?0:$record->recommendation_cert;
                    $doc_url = $base_url.$document." ";
                    return $document?'<a href='.$doc_url.'target="_blank">View Document</a>' : 'No document';
                })
                ->html(),
                Tables\Columns\TextColumn::make('college_cert_with_fee_structure')
                ->label('Institute Certificate along with fee structure')
                ->formatStateUsing(function ($record) {
                    $base_url = "https://kalyankaripratishtan.demovoting.com/storage/";
                    $document = ($record->college_cert_with_fee_structure=='not specify')?0:$record->college_cert_with_fee_structure;
                    $doc_url = $base_url.$document." ";
                    return $document?'<a href='.$doc_url.'target="_blank">View Document</a>' : 'No document';
                })
                ->html(),
                Tables\Columns\TextColumn::make('other_docs_cert')
                ->label('Other Documents')
                ->formatStateUsing(function ($record) {
                    $base_url = "https://kalyankaripratishtan.demovoting.com/storage/";
                    $document = ($record->other_docs_cert=='not specify')?0:$record->other_docs_cert;
                    $doc_url = $base_url.$document." ";
                    return $document?'<a href='.$doc_url.'target="_blank">View Document</a>' : 'No document';
                })
                ->html(),
                Tables\Columns\TextColumn::make('loan_amt_need')
                    ->searchable(),
                Tables\Columns\TextColumn::make('consent')
                    ->searchable(),
                Tables\Columns\TextColumn::make('declaration')
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
                // Tables\Actions\EditAction::make(),
                // Tables\Actions\ViewAction::make(),
                Action::make('Download Application')
                ->icon('heroicon-o-arrow-down-tray')
                ->url(fn(Application $record)=>route('application.pdf.download',$record))
                ->openUrlInNewTab(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function infolist(Infolist $infolist): Infolist
{
    return $infolist
        ->schema([
            Infolists\Components\ImageEntry::make('student_photo'),
            Infolists\Components\TextEntry::make('student_fullname'),
            Infolists\Components\TextEntry::make('student_email')
                ->columnSpanFull(),
        ]);
}

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListApplications::route('/'),
            // 'create' => Pages\CreateApplication::route('/create'),
            // 'edit' => Pages\EditApplication::route('/{record}/edit'),
        ];
    }
}
