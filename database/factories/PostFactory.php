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
            'title' => PostFactoryData::getFakeTitle(),
            'file_url' => $this->faker->url(),
            'thumbnail_url' => $this->faker->randomElement(PostFactoryData::IMAGEURLS),
            'share_link_url' => 'https://github.com/tooooofu24',
            'comment' => $this->faker->realText(mt_rand(10, 100)),
            'area_id' => mt_rand(1, 90),
            'user_id' => mt_rand(1, 20),
        ];
    }
}
