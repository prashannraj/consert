<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Filament\Forms;
use Filament\Notifications\Notification;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class SignupComponent extends Component implements Forms\Contracts\HasForms
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
        $token = Str::random(20);

        $check = Student::where('token', $token)->first();
        if ($check != NULL) {
            return $this->submit();
        }

        $data = $this->form->getState();
        $data['password'] = Hash::make($this->password);
        $data['token'] = $token;
        $data['status'] = 'active';
        
        Student::create($data);

        Notification::make()
            ->title('Signup successfully')
            ->icon('heroicon-o-badge-check')
            ->iconColor('success')
            ->send();

        return redirect('/');
    }
    
    public function render()
    {
        return view('livewire.signup-component');
    }
}
