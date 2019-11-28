<?php

use App\model\Category;
use App\model\Comment;
use App\model\Image;
use App\model\Post;
use App\model\Tag;
use App\model\Video;
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
        factory(Category::class, 10)->create();
        factory(\App\User::class, 250)->create();        
       
        factory(Post::class, 1000)->create();
        factory(Tag::class, 30)->create();
        factory(Image::class, 1000)->create();
        factory(Video::class, 600)->create();
        factory(Comment::class, 250)->create();
    }
}
