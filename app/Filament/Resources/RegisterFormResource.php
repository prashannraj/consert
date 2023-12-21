<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegisterFormResource\Pages;
use App\Filament\Resources\RegisterFormResource\RelationManagers;
use App\Models\ClassData;
use App\Models\RegisterForm;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Filters\SelectFilter;
use Closure;

class RegisterFormResource extends Resource
{
    protected static ?string $model = RegisterForm::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('class_data_id')->label('Applied Post')->options(ClassData::where('status', 'active')->pluck('name', 'id'))->searchable(),
                Forms\Components\TextInput::make('student_id')->default(rand(1000000000, 9999999999))->unique(ignoreRecord:true)->required(),
                Forms\Components\TextInput::make('student_name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')->email()->required(),
                Forms\Components\TextInput::make('father_name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('mother_name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('grand_father_name')
                    ->maxLength(255),
                Forms\Components\Select::make('gender')->options([
                    'male' => 'male',
                    'female' => 'female'
                ]),
                Forms\Components\TextInput::make('full_address')
                    ->maxLength(255),
                Forms\Components\TextInput::make('parents_phone_number')->label('Contact Number')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('student_photo'),
                Forms\Components\FileUpload::make('students_sign_photo'),
                Forms\Components\FileUpload::make('citizenship_front_photo'),
                Forms\Components\FileUpload::make('citizenship_back_photo'),
                Forms\Components\FileUpload::make('transcript_photo'),
                Forms\Components\FileUpload::make('character_photo'),
                Forms\Components\FileUpload::make('school_fee_vouchers_photo')->label('Payment voucher'),
                // Forms\Components\Textarea::make('extra'),
                Forms\Components\Select::make('status')->options([
                    'not seen' => 'not seen',
                    'approved' => 'approved',
                    'rejected' => 'rejected'
                ])->reactive(),
                Forms\Components\Textarea::make('extra.remark')->label('Remark')->hidden(function(Closure $get) {
                    if ($get('status') == 'rejected') {
                        return false;
                    }
                    else {
                        return true;
                    }
                }),
                Forms\Components\Select::make('student_db_id')->options(Student::pluck('email', 'id'))->searchable()->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('student_id')->label('ID')->toggleable()->searchable(),
                Tables\Columns\TextColumn::make('class_data_id')->label('Applied Post')->toggleable()->getStateUsing(function(Model $record) {
                    $classData = ClassData::find($record->class_data_id);
                    if($classData) {
                        return $classData->name;
                    }
                }),
                Tables\Columns\TextColumn::make('student_name')->toggleable()->searchable(),
                Tables\Columns\TextColumn::make('email')->toggleable()->searchable(),
                Tables\Columns\TextColumn::make('father_name')->toggleable()->searchable(),
                Tables\Columns\TextColumn::make('mother_name')->toggleable()->searchable(),
                Tables\Columns\TextColumn::make('grand_father_name')->toggleable()->searchable(),
                Tables\Columns\TextColumn::make('gender')->toggleable()->searchable(),
                Tables\Columns\TextColumn::make('full_address')->toggleable()->searchable(),
                Tables\Columns\TextColumn::make('parents_phone_number')->label('Contact Number')->toggleable(),
                Tables\Columns\ImageColumn::make('student_photo')->width(100)->height('auto')->toggleable(),
                Tables\Columns\ImageColumn::make('students_sign_photo')->width(100)->height('auto')->toggleable(),
                Tables\Columns\ImageColumn::make('citizenship_front_photo')->width(100)->height('auto')->toggleable(),
                Tables\Columns\ImageColumn::make('citizenship_back_photo')->width(100)->height('auto')->toggleable(),
                Tables\Columns\ImageColumn::make('transcript_photo')->width(100)->height('auto')->toggleable(),
                Tables\Columns\ImageColumn::make('character_photo')->width(100)->height('auto')->toggleable(),
                Tables\Columns\ImageColumn::make('school_fee_vouchers_photo')->label('Payment Voucher')->width(100)->height('auto')->toggleable(),
                Tables\Columns\TextColumn::make('status')->toggleable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->date()->toggleable()->sortable(),
            ])->defaultSort('id', 'DESC')
            ->filters([
                Tables\Filters\TrashedFilter::make(),
                SelectFilter::make('class_data_id')->label('Class')->multiple()
                    ->options(ClassData::orderBy('order', 'DESC')->pluck('name', 'id')),
                SelectFilter::make('status')->multiple()
                    ->options([
                    'not seen' => 'not seen',
                    'approved' => 'approved',
                    'rejected' => 'rejected'
                    ])
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListRegisterForms::route('/'),
            'create' => Pages\CreateRegisterForm::route('/create'),
            'view' => Pages\ViewRegisterForm::route('/{record}'),
            'edit' => Pages\EditRegisterForm::route('/{record}/edit'),
        ];
    }    
    
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
