<?php

namespace App\Filament\Resources\InstitusiResource\Pages;

use App\Filament\Resources\InstitusiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInstitusi extends EditRecord
{
    protected static string $resource = InstitusiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
