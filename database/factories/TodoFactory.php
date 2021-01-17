<?php

namespace Database\Factories;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Todo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1,3),
            'task_id' => $this->faker->word,
            'project_type' => $this->faker->randomElement(array('bee', 'falcon' , 'whale')),
            'notes' => $this->faker->text(100),
            'accuracy' => $this->faker->numberBetween(60,100),
            'payment' => $this->faker->numberBetween(1,20),
            'time_spent' => $this->faker->numberBetween(86400,172800),
            'deadline' => $this->faker->numberBetween(86400,172800),
        ];
    }
}
