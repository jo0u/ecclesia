<?php

namespace App\Filament\Resources\Professores;

use App\Filament\Resources\Professores\Pages\CreateProfessores;
use App\Filament\Resources\Professores\Pages\EditProfessores;
use App\Filament\Resources\Professores\Pages\ListProfessores;
use App\Filament\Resources\Professores\Schemas\ProfessoresForm;
use App\Filament\Resources\Professores\Tables\ProfessoresTable;
use App\Models\Professores;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProfessoresResource extends Resource
{
    protected static ?string $model = Professores::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ProfessoresForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProfessoresTable::configure($table);
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
            'index' => ListProfessores::route('/'),
            'create' => CreateProfessores::route('/create'),
            'edit' => EditProfessores::route('/{record}/edit'),
        ];
    }
}
