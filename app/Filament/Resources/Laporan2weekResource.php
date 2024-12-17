<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Laporan2weekResource\Pages;
use App\Filament\Resources\Laporan2weekResource\RelationManagers;
use App\Models\Laporan2week;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class Laporan2weekResource extends Resource
{
    protected static ?string $model = Laporan2week::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListLaporan2weeks::route('/'),
            'create' => Pages\CreateLaporan2week::route('/create'),
            'edit' => Pages\EditLaporan2week::route('/{record}/edit'),
        ];
    }


    public static function getNavigationGroup(): ?string {
        return 'Laporan';
    }
}
