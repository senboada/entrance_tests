<?php

namespace Database\Factories;

use App\Models\Answer;
use App\Models\User;
use App\Models\Question;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnswerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Answer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'answer' => $this->faker->name(),
            'user_id' => User::inRandomOrder()->first()->id,
            'question_id' => Question::inRandomOrder()->first()->id,
        ];
    }
}
