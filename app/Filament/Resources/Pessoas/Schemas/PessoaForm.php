<?php

namespace App\Filament\Resources\Pessoas\Schemas;

use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Toggle;

class PessoaForm
{
    // REMOVA os tipos Schema - use apenas $form
    public static function configure($form)
    {
       return $form
            ->schema([
                TextInput::make('nome')
                    ->label('Nome Completo')
                    ->required()
                    ->maxLength(150)
                    ->columnSpanFull(),

                TextInput::make('email')
                    ->email()
                    ->unique('pessoas', 'email', ignoreRecord: true)
                    ->nullable()
                    ->maxLength(255),

                TextInput::make('telefone')
                    ->label('Telefone')
                    ->tel()
                    ->nullable()
                    ->maxLength(20),

                DatePicker::make('data_nascimento')
                    ->label('Data de Nascimento')
                    ->nullable()
                    ->displayFormat('d/m/Y'),

                Toggle::make('ativo')
                    ->label('Ativo')
                    ->default(true)
                    ->inline(false),
            ]);
    }
}