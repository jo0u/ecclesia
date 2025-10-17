<?php

namespace App\Filament\Resources\Professores\Pages;

use App\Filament\Resources\Professores\ProfessoresResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProfessores extends EditRecord
{
    protected static string $resource = ProfessoresResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
