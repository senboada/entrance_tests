<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\Area::factory(10)->create();
        \App\Models\Test::factory(10)->create();
        \App\Models\Question::factory(100)->create();
        \App\Models\Answer::factory(1000)->create();
        \App\Models\CorrectAnswer::factory(500)->create();
        \App\Models\Rating::factory(1000)->create();

        \App\Models\IpAddress::factory(1000)->create();
        \App\Models\RequestHelp::factory(500)->create();
        
    }
}
