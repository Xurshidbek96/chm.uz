<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'category_id'=>rand(1,10),
            'name_uz' => $this->faker->sentence,
            'name_en' => $this->faker->sentence,
            'product_uz' => $this->faker->sentence,
            'product_en' => $this->faker->sentence,
            'title_uz' => $this->faker->text,
            'title_en' => $this->faker->text,
            'price_uzs' => $this->faker->sentence,
            'price_usd' => $this->faker->sentence,
            'name_en' => $this->faker->sentence,
            'description_uz' => $this->faker->text,
            'description_en' => $this->faker->text,
            'img1' => 'people.png',
            'img2' => 'people.png',
            'img3' => 'people.png',
            'img4' => 'people.png',
            'img5' => 'people.png',
            'views' => rand(0,50),
            'status' => rand(0,1),
        ];
    }
}
