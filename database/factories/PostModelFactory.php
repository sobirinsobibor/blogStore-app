<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostModel>
 */
class PostModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->sentence(mt_rand(10,25)),
            'body' => '<p>'.implode( '</p><p>', $this->faker->paragraphs(mt_rand(5,9))).'</p>',
            'user_id' => mt_rand(1,6),
            'category_id' => mt_rand(1,3) 
        ];
    }
}
