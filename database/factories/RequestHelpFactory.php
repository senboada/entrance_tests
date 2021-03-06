<?php

namespace Database\Factories;

use App\Models\RequestHelp;
use App\Models\question;
use Illuminate\Database\Eloquent\Factories\Factory;

class RequestHelpFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RequestHelp::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $question = question::inRandomOrder()->first();
        return [
            'question_test_id' => $question->test_id,
            'question_id' => $question->id,
        ];
    }
}
