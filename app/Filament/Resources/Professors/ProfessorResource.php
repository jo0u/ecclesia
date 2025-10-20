<?php

namespace App\Filament\Resources\Professors;

use App\Filament\Resources\Professors\Pages\CreateProfessor;
use App\Filament\Resources\Professors\Pages\EditProfessor;
use App\Filament\Resources\Professors\Pages\ListProfessors;
use App\Filament\Resources\Professors\Schemas\ProfessorForm;
use App\Filament\Resources\Professors\Tables\ProfessorsTable;
use App\Models\Professor;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProfessorResource extends Resource
{
    protected static ?string $model = Professor::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Professor';

    public static function form(Schema $schema): Schema
    {
        return ProfessorForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProfessorsTable::configure($table);
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
            'index' => ListProfessors::route('/'),
            'create' => CreateProfessor::route('/create'),
            'edit' => EditProfessor::route('/{record}/edit'),
        ];
    }
}
