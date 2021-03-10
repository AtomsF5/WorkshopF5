<?php

namespace Database\Factories;

use App\Models\Workshop;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkshopFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Workshop::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(4),
            'category'=>$this->faker->sentence(1),
            'description'=>$this->faker->paragraph(),
            'date'=>$this->faker->date(),
            // 'hour'=>$this->faker->time(),
            'technical_requirement'=>$this->faker->sentence(3),
            'image'=>$this->faker->url(),
            'platform_web'=>$this->faker->url(),
        ];
    }
}
