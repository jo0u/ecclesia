<?php

namespace App\Filament\Resources\Professors\Schemas;

use Filament\Forms;

class ProfessorForm
{
    public static function configure($form)
    {
        return $form
            ->schema([
                Forms\Components\Select::make('pessoa_id')
                    ->label('Pessoa')
                    ->relationship('pessoa', 'nome')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->columnSpanFull(),
                    
                Forms\Components\TextInput::make('especialidade')
                    ->label('Especialidade')
                    ->maxLength(100)
                    ->nullable(),
                    
                Forms\Components\Toggle::make('ativo')
                    ->label('Ativo')
                    ->default(true)
                    ->inline(false),
            ]);
    }
}