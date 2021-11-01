<?php

namespace Database\Factories;

use App\Models\CorrectAnswer;
use App\Models\Question;

use Illuminate\Database\Eloquent\Factories\Factory;

class CorrectAnswerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CorrectAnswer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'answer' => $this->faker->name(),
            'question_id' => Question::inRandomOrder()->first()->id,
        ];
    }
}
