<?php

namespace App\Filament\Resources\RegisterFormResource\Pages;

use App\Filament\Resources\RegisterFormResource;
use App\Mail\ApprovalMail;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Mail;
use Filament\Notifications\Notification;

class CreateRegisterForm extends CreateRecord
{
    protected static string $resource = RegisterFormResource::class;
}
