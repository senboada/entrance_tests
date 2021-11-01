<?php

namespace Database\Factories;

use App\Models\Test;
use App\Models\Area;

use Illuminate\Database\Eloquent\Factories\Factory;

class TestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Test::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'url' => $this->faker->unique()->name(),
            'type' => $this->faker->randomElement(['public' ,'private']),
            'area_id' => Area::inRandomOrder()->first()->id,
        ];
    }
}
