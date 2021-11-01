<?php

namespace Database\Factories;

use App\Models\IpAddress;
use App\Models\answer;

use Illuminate\Database\Eloquent\Factories\Factory;

class IpAddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = IpAddress::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $answer = answer::inRandomOrder()->first();
        return [
            'ip_address' => $this->faker->name(),
            'answer_id' => $answer->id,
            'answer_question_id' => $answer->question_id,
        ];
    }
}
