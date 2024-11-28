<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AllotmentResource\Pages;
use App\Filament\Resources\AllotmentResource\RelationManagers;
use App\Models\Allotment;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AllotmentResource extends Resource
{
    protected static ?string $model = Allotment::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('center_id')
                    ->relationship('center', 'name')
                    ->required()
                    ->preload()
                    ->searchable(),
                TextInput::make('company_name')
                ->required(),
                TextInput::make('allotment')->numeric()->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('center.name')->label('Center Name'),
                TextColumn::make('company_name')->label('Company Name'),
                TextColumn::make('allotment')->label('Allotment'),
                TextColumn::make('user.name')->label('Allocated By '),
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
            'index' => Pages\ListAllotments::route('/'),
            'create' => Pages\CreateAllotment::route('/create'),
            'edit' => Pages\EditAllotment::route('/{record}/edit'),
        ];
    }
}
