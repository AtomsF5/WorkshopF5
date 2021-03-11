<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'lastname' => $this->faker->lastname,
            'date_born' => $this->faker->date_born,
            'sex' => $this->faker->sex,
            'email' => $this->faker->email,
            'phone' => $this->faker->phone,
            'city' => $this->faker->city,
            'how_did_we_meet' => $this->faker->how_did_we_meet,
        ];
    }
}
