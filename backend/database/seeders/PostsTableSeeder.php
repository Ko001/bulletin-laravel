<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Modles\Post;
use App\Modles\Comment;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 50)
            ->create()
            ->each(function ($post) {
                $comments = factory(Comment::class, 2)->make();
                $post->comments()->saveMany($comments);
            });
    }
}
