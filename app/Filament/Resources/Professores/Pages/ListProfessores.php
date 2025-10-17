<?php

namespace App\Filament\Resources\Professores\Pages;

use App\Filament\Resources\Professores\ProfessoresResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProfessores extends ListRecords
{
    protected static string $resource = ProfessoresResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
