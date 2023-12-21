<?php

namespace App\Http\Livewire;

use App\Models\RegisterForm;
use Livewire\Component;
use Filament\Forms;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class StudentRegister extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;
    
    public $formId;
    
    public $disabled = true;
    
    public $class_data;
    public $student_name;
    public $email;
    public $father_name;
    public $mother_name;
    public $grand_father_name;
    public $gender;
    public $full_address;
    public $parents_phone_number;
    public $student_photo;
    public $students_sign_photo;
    public $citizenship_front_photo;
    public $citizenship_back_photo;
    public $transcript_photo;
    public $character_photo;
    public $school_fee_vouchers_photo;
    public $status;
    
    public function mount() {
        $data = RegisterForm::where('id', $this->formId)->first();
        if ($data) {
            // dd($data);
            $this->form->fill([
                'student_name' => $data->student_name,
                'email' => $data->email,
                'father_name' => $data->father_name,
                'mother_name' => $data->mother_name,
                'grand_father_name' => $data->grand_father_name,
                'gender' => $data->gender,
                'full_address' => $data->full_address,
                'parents_phone_number' => $data->parents_phone_number,
                'student_photo' => $data->student_photo,
                'students_sign_photo' => $data->students_sign_photo,
                'citizenship_front_photo' => $data->citizenship_front_photo,
                'citizenship_back_photo' => $data->citizenship_back_photo,
                'transcript_photo' => $data->transcript_photo,
                'character_photo' => $data->character_photo,
                'school_fee_vouchers_photo' => $data->school_fee_vouchers_photo,
            ]);
            
        }
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\Card::make()->schema([
                Forms\Components\TextInput::make('student_name')
                    ->maxLength(255)->required()->disabled($this->disabled),
                Forms\Components\TextInput::make('email')->email()->required()->disabled($this->disabled),
                Forms\Components\TextInput::make('father_name')
                    ->maxLength(255)->required()->disabled($this->disabled),
                Forms\Components\TextInput::make('mother_name')
                    ->maxLength(255)->required()->disabled($this->disabled),
                Forms\Components\TextInput::make('grand_father_name')
                    ->maxLength(255)->required()->disabled($this->disabled),
                Forms\Components\Select::make('gender')->options([
                    'male' => 'male',
                    'female' => 'female'
                ])->required()->disabled($this->disabled),
                Forms\Components\TextInput::make('full_address')
                    ->maxLength(255)->required()->disabled($this->disabled),
                Forms\Components\TextInput::make('parents_phone_number')->label('Contact Number')
                    ->tel()
                    ->maxLength(255)->required()->disabled($this->disabled),
                Forms\Components\FileUpload::make('student_photo')->required()->maxSize(500)->disabled($this->disabled),
                Forms\Components\FileUpload::make('students_sign_photo')->required()->maxSize(500)->disabled($this->disabled),
                Forms\Components\FileUpload::make('citizenship_front_photo')->required()->maxSize(500)->disabled($this->disabled),
                Forms\Components\FileUpload::make('citizenship_back_photo')->required()->maxSize(500)->disabled($this->disabled),
                Forms\Components\FileUpload::make('transcript_photo')->required()->maxSize(500)->disabled($this->disabled),
                Forms\Components\FileUpload::make('character_photo')->required()->maxSize(500)->disabled($this->disabled),
                Forms\Components\FileUpload::make('school_fee_vouchers_photo')->label('Payment Voucher')->required()->maxSize(500)->disabled($this->disabled),
            ])->columns([
                'sm' => 2
            ])
        ];
    }

    public function submit()
    {
        $randomId = rand(100000000,9999999999);

        $check = RegisterForm::where('student_id', $randomId)->first();
        if ($check != NULL) {
            return $this->submit();
        }

        $data = RegisterForm::create($this->form->getState());
        $data->class_data_id = $this->class_data->id;
        $data->status = 'not seen';
        $data->student_id = $randomId;
        $data->student_db_id = Auth::guard('student')->user()->id;
        $data->save();

        Notification::make()
            ->title('Admission Form Submitted Successfully')
            ->icon('heroicon-o-badge-check')
            ->iconColor('success')
            ->send();

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.student-register');
    }
}
