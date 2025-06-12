<?php

namespace App\Filament\Resources\GalleriesResource\Pages;

use App\Filament\Resources\GalleriesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGalleries extends EditRecord
{
    protected static string $resource = GalleriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
