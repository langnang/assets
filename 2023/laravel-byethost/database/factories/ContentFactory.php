<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cid' => $this->faker->numberBetween(),
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->word(),
            'text' => $this->faker->text(500),
            'create_at' => $this->faker->date() . ' ' . $this->faker->time(),
            'update_at' => $this->faker->date() . ' ' . $this->faker->time(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [];
        });
    }
}
