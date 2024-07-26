<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('test1234'),
        'remember_token' => str_random(10),
        ];
    }
}
