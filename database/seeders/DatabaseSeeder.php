<?php

namespace Database\Seeders;

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
        \App\Models\Post::truncate(); //da um truncate na tabela
        Schema::enableForeignKeyConstraints(); //habilita as foreign keys novamente

        \App\Models\Role::factory(1)->create();
        \App\Models\User::factory(10)->create();

        \App\Models\Category::factory(10)->create();
        \App\Models\Post::factory(100)->create();
    }
}
