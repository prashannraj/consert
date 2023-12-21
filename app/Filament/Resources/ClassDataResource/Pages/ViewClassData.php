<?php

namespace App\Filament\Resources\ClassDataResource\Pages;

use App\Filament\Resources\ClassDataResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewClassData extends ViewRecord
{
    protected static string $resource = ClassDataResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
