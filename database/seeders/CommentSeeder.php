<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $posts = Post::all();

        foreach ($posts as $post) {
            Comment::factory(5)->create([
                'post_id' => $post->id,
            ]);
        }
    }
}
