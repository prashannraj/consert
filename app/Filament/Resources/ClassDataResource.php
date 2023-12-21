<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClassDataResource\Pages;
use App\Filament\Resources\ClassDataResource\RelationManagers;
use App\Models\ClassData;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClassDataResource extends Resource
{
    protected static ?string $model = ClassData::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()->schema([
                    Forms\Components\TextInput::make('name')->label('Post')->unique(ClassData::class, 'name', ignoreRecord: true)->required()->maxLength(255),
                    Forms\Components\TextInput::make('order')->integer(),
                    Forms\Components\TextInput::make('year')->label('vacancy Year')
                        ->maxLength(255),
                    Forms\Components\DateTimePicker::make('admission_from')->label('Date start'),
                    Forms\Components\DateTimePicker::make('admission_to')->label('Date end'),
                    Forms\Components\Select::make('status')->options([
                        'active' => 'active',
                        'not active' => 'not active'
                    ])->default('active'),
                ])->columns([
                    'sm' => 2
                ]),
                Forms\Components\RichEditor::make('admission_fee')->label('vacancy details')->columnSpan('full'),
                // Forms\Components\Textarea::make('extra'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Post')->toggleable()->searchable(),
                Tables\Columns\TextColumn::make('order')->toggleable()->sortable(),
                Tables\Columns\TextColumn::make('year')->toggleable()->searchable(),
                Tables\Columns\TextColumn::make('admission_from')->label('Date start')
                    ->dateTime()->toggleable()->sortable(),
                Tables\Columns\TextColumn::make('admission_to')->label('Date end')
                    ->dateTime()->toggleable()->sortable(),
                // Tables\Columns\TextColumn::make('admission_fee')->toggleable(),
                // Tables\Columns\TextColumn::make('extra')->toggleable(),
                Tables\Columns\TextColumn::make('status')->toggleable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->date()->toggleable()->sortable(),
            ])->defaultSort('id', 'DESC')
            ->filters([
                Tables\Filters\TrashedFilter::make(),
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
            'index' => Pages\ListClassData::route('/'),
            'create' => Pages\CreateClassData::route('/create'),
            'view' => Pages\ViewClassData::route('/{record}'),
            'edit' => Pages\EditClassData::route('/{record}/edit'),
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
