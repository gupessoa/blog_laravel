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
            'title'=>$this->faker->sentence(),
            'slug'=>$this->faker->unique()->slug(),
            'excerpt'=>$this->faker->sentence(),
            'body'=>$this-$this->faker->paragraphs(5),
            'id_user'=>$this->faker-> User::factory(),
            'id_category'=>$this->faker->Category::factory(),
        ];
    }
}
