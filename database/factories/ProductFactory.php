<?php

namespace Database\Factories;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return array(
            'section_id' => Section::query()->inRandomOrder()->first()?->id,

            'is_active' => 1,
            'title' => $this->faker->sentence,
            'articles' => rand(10000,20000),
            'manufacturer' => $this->faker->word,
            'composition' => $this->faker->sentence,
            'price' => rand(10000,20000),
            'sale_price' => rand(10000,20000),
            'image' => 'https://source.unsplash.com/random/640x480',
            'popular' => 0


        );
    }
}
