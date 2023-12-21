<?php

namespace App\Filament\Resources\ClassDataResource\Pages;

use App\Filament\Resources\ClassDataResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClassData extends EditRecord
{
    protected static string $resource = ClassDataResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
