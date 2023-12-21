<?php

namespace App\Filament\Resources\RegisterFormResource\Pages;

use App\Filament\Resources\RegisterFormResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Facades\Mail;
use Filament\Notifications\Notification;
use App\Mail\ApprovalMail;
use App\Mail\RejectMail;

class ViewRegisterForm extends ViewRecord
{
    protected static string $resource = RegisterFormResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
            Actions\Action::make('Send Approved Mail')->icon('heroicon-o-mail')->action(function () {
                Mail::to($this->record['email'])->send(new ApprovalMail($this->record));
                Notification::make()->title('Approval mail successfully sent')->icon('heroicon-o-check-circle')->iconColor('success')->send();
            }),
            Actions\Action::make('Send Rejected Mail')->icon('heroicon-o-mail')->action(function () {
                Mail::to($this->record['email'])->send(new RejectMail($this->record));
                Notification::make()->title('Reject mail successfully sent')->icon('heroicon-o-check-circle')->iconColor('success')->send();
            }),
            Actions\Action::make('Generate Id Card')->action(function() {
                return redirect('/id-card/'.$this->record->id);
            })
        ];
    }
}
