<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints(); //desabilita as foreign keys
        \App\Models\User::truncate(); //da um truncate na tabela
        \App\Models\Role::truncate(); //da um truncate na tabela
        \App\Models\Category::truncate(); //da um truncate na tabela
        $posts = \App\Models\Post::truncate(); //da um truncate na tabela
        \App\Models\Tag::truncate(); //da um truncate na tabela
        \App\Models\Comment::truncate(); //da um truncate na tabela
        \App\Models\Image::truncate(); //da um truncate na tabela
        Schema::enableForeignKeyConstraints(); //habilita as foreign keys novamente

        \App\Models\Role::factory(1)->create();
        \App\Models\Role::factory(1)->create(['name'=>'admin']);
        $users = \App\Models\User::factory(10)->create();
        \App\Models\User::factory()->create([
                    'name' => 'admin',
                    'email' => 'admin@admin.com',
                    'role_id' => 2
                ]);

        foreach ($users as $user)
        {
            $user->image()->save(Image::factory()->make());
        }

        \App\Models\Category::factory(10)->create();
        \App\Models\Category::factory()->create(['name' => 'Uncategorized']);
        $posts = \App\Models\Post::factory(50)->create();
        \App\Models\Comment::factory(100)->create();
        \App\Models\Tag::factory(10)->create();

        foreach ( $posts as $post)
        {
            $tags_ids = [];
            $tags_ids[] = Tag::all()->random()->id;
            $tags_ids[] = Tag::all()->random()->id;
            $tags_ids[] = Tag::all()->random()->id;

//            $post->tags()->sync($tags_ids);
            $post->tags()->attach($tags_ids);

            $post->image()->save(Image::factory()->make());
        }
    }
}
