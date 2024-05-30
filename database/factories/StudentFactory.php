<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition()
    {
        return [
            'matric_id' => $this->faker->numberBetween($min = 10000, $max = 90000),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->freeEmail,
            'phone_no' => $this->faker->phoneNumber,
        ];
    }
}
