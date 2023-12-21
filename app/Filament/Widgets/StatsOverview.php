<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\User;
use App\Models\ClassData;
use App\Models\RegisterForm;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Class Data', ClassData::count())
            ->description('view record')
            ->descriptionIcon('heroicon-s-link')->color('success')->url('/admin/class-datas'),
            Card::make('Register Form Data', RegisterForm::count())
            ->description('view record')
            ->descriptionIcon('heroicon-s-link')->color('success')->url('/admin/register-forms'),
            Card::make('User Data', User::count())
            ->description('view record')
            ->descriptionIcon('heroicon-s-link')->color('success')->url('/admin/users'),
        ];
    }
}
