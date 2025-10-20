<?php

namespace App\Filament\Resources\Pessoas;

use App\Filament\Resources\Pessoas\Pages\CreatePessoa;
use App\Filament\Resources\Pessoas\Pages\EditPessoa;
use App\Filament\Resources\Pessoas\Pages\ListPessoas;
use App\Filament\Resources\Pessoas\Schemas\PessoaForm;
use App\Filament\Resources\Pessoas\Tables\PessoasTable;
use App\Models\Pessoa;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PessoaResource extends Resource
{
    protected static ?string $model = Pessoa::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'ake:filament-resource Aula';
    

    // PERSONALIZE O NOME NA BARRA LATERAL
    protected static ?string $navigationLabel = 'Membros';

    // PERSONALIZE O TÍTULO (opcional)
    protected static ?string $modelLabel = 'Membro';

    // PERSONALIZE O TÍTULO PLURAL (opcional)
    protected static ?string $pluralModelLabel = 'Membros';



    public static function form(Schema $schema): Schema
    {
        return PessoaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PessoasTable::configure($table);
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
            'index' => ListPessoas::route('/'),
            'create' => CreatePessoa::route('/create'),
            'edit' => EditPessoa::route('/{record}/edit'),
        ];
    }
}
