<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ClassData;

class ClassDataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClassData::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'order' => $this->faker->numberBetween(-10000, 10000),
            'year' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'admission_from' => $this->faker->dateTime(),
            'admission_to' => $this->faker->dateTime(),
            'admission_fee' => $this->faker->text,
            'extra' => '{}',
            'status' => $this->faker->regexify('[A-Za-z0-9]{255}'),
        ];
    }
}
