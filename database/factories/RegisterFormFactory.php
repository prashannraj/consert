<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ClassDatum;
use App\Models\RegisterForm;

class RegisterFormFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RegisterForm::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'class_data_id' => ClassDatum::factory(),
            'student_name' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'email' => $this->faker->safeEmail,
            'father_name' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'mother_name' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'grand_father_name' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'gender' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'full_address' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'parents_phone_number' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'student_photo' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'students_sign_photo' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'citizenship_front_photo' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'citizenship_back_photo' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'transcript_photo' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'character_photo' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'school_fee_vouchers_photo' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'extra' => '{}',
            'status' => $this->faker->regexify('[A-Za-z0-9]{255}'),
        ];
    }
}
