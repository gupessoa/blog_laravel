<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'the_comment'=> $this->faker->paragraph(),
            'id_post' => Post::all()->random(1)->first()->id,
            'id_user' => User::all()->random(1)->first()->id,
        ];
    }
}
