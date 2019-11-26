<?php

use App\model\Category;
use App\model\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 50)->create();
        factory(Post::class, 1000)->create();
        factory(Category::class, 10)->create();
    }
}
