<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'user_id' => 1,
                'blog_cat_id' => 1,
                'title' => 'Blog post 1',
                'slug' => 'blog-post-1',
                'desc' => 'Description of blog post 1...',
            ],
            [
                'user_id' => 1,
                'blog_cat_id' => 2,
                'title' => 'Blog post 2',
                'slug' => 'blog-post-2',
                'desc' => 'Description of blog post 2...',
            ],
            [
                'user_id' => 1,
                'blog_cat_id' => 3,
                'title' => 'Blog post 3',
                'slug' => 'blog-post-3',
                'desc' => 'Description of blog post 3...',
            ],
            [
                'user_id' => 1,
                'blog_cat_id' => 4,
                'title' => 'Blog post 4',
                'slug' => 'blog-post-5',
                'desc' => 'Description of blog post 4...',
            ],
            [
                'user_id' => 1,
                'blog_cat_id' => 5,
                'title' => 'Blog post 5',
                'slug' => 'blog-post-6',
                'desc' => 'Description of blog post 5...',
            ],


        ];

        foreach($posts as $row) {
            Post::create($row);
        }
    }
}
