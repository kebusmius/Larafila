<?php

namespace App\Filament\Resources\TeknologiResource\Pages;

use App\Filament\Resources\TeknologiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTeknologi extends EditRecord
{
    protected static string $resource = TeknologiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
