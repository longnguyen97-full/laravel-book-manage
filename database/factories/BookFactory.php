<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'          => $this->faker->text(),
            'content'        => $this->faker->text(),
            'published_year' => $this->faker->numberBetween(2000, 2022),
            'author_id'      => $this->faker->numberBetween(1, 10),
            'category_id'    => $this->faker->numberBetween(1, 5),
        ];
    }
}
