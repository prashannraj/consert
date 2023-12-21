<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use Filament\Forms;
use Filament\Notifications\Notification;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ResetpasswordComponent extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;
    
    public $token;
    public $password;
    public $student;
    
    public function mount() {
        $this->student = Student::where('token', $this->token)->first();
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\Card::make()->schema([
                Forms\Components\TextInput::make('password')->password()->required(),
            ])
        ];
    }
    
    public function submit()
    {
        $student = $this->student;
        $student->password = Hash::make($this->password);
        $student->save();
        Notification::make()
            ->title('Password successfully changed.')
            ->icon('heroicon-o-badge-check')
            ->iconColor('success')
            ->send();
        return redirect('/logout');
    }
    
    public function render()
    {
        return view('livewire.resetpassword-component');
    }
}
