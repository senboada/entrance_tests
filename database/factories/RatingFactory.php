<?php

namespace Database\Factories;

use App\Models\Rating;
use App\Models\Answer;

use Illuminate\Database\Eloquent\Factories\Factory;

class RatingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rating::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $answer = Answer::inRandomOrder()->first();
        return [
            'approve' => $this->faker->randomElement(['yes' ,'no']),
            'answer_id' => $answer->id,
            'answer_question_id' => $answer->question_id,
        ];
    }
}
