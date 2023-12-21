<?php

namespace App\Filament\Resources\RegisterFormResource\Pages;

use App\Filament\Resources\RegisterFormResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRegisterForms extends ListRecords
{
    protected static string $resource = RegisterFormResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
