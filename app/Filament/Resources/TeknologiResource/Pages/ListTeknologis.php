<?php

namespace App\Filament\Resources\TeknologiResource\Pages;

use App\Filament\Resources\TeknologiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTeknologis extends ListRecords
{
    protected static string $resource = TeknologiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
