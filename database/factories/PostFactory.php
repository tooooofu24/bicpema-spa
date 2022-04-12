<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(mt_rand(10, 20)),
            'file_url' => $this->faker->url(),
            'thumbnail_url' => $this->faker->imageUrl($width = 640, $height = 480),
            'share_link_url' => $this->faker->url(),
            'comment' => $this->faker->realText(mt_rand(10, 100)),
            'area_id' => mt_rand(1, 90),
            'user_id' => mt_rand(1, 20),
        ];
    }
}
