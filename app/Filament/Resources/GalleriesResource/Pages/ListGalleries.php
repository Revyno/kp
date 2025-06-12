<?php

namespace App\Filament\Resources\GalleriesResource\Pages;

use App\Filament\Resources\GalleriesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGalleries extends ListRecords
{
    protected static string $resource = GalleriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
