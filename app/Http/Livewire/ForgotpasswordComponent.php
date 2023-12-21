<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use Filament\Forms;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Mail;

class ForgotpasswordComponent extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;
    
    public $email;

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\Card::make()->schema([
                Forms\Components\TextInput::make('email')->required(),
            ])
        ];
    }
    
    public function submit()
    {
        $check = Student::where('status', 'active')->where('email', $this->email)->first();
        if ($check != NULL) {
            Mail::to($check->email)->send(new ForgotPasswordMail($check));
            Notification::make()
            ->title('Password successfully changed.')
            ->icon('heroicon-o-badge-check')
            ->iconColor('success')
            ->send();
            return redirect('/login');
        }
        else {
            Notification::make()
            ->title('Invalid Email.')
            ->iconColor('danger')
            ->send();
        }
    }
    
    public function render()
    {
        return view('livewire.forgotpassword-component');
    }
}
