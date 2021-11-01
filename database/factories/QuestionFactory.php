<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\Test;

use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sequence' => $this->faker->numberBetween(1,100),
            'question' => $this->faker->name(),
            'help' => $this->faker->name(),
            'test_id' => Test::inRandomOrder()->first()->id,
        ];
    }
}
