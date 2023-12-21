<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Filament\Forms;
use Filament\Notifications\Notification;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginComponent extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;
    
    public $email;
    public $password;

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\Card::make()->schema([
                Forms\Components\TextInput::make('email')->email()->unique()->required(),
                Forms\Components\TextInput::make('password')->password()->required()
            ])
        ];
    }
    
    public function submit()
    {
        if (Auth::guard('student')->attempt(['email' => $this->email, 'password' => $this->password, 'status' => 'active'])) {
            // Authentication passed...
            return redirect()->to('/');
        }

        $this->addError('email', 'These credentials do not match our records.');

        return redirect('/dashboard');
    }
    
    public function render()
    {
        return view('livewire.login-component');
    }
}
