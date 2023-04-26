<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         Post::create([
            'user_id'=>'1',
            'title' => 'post title 1'
        ]);
        Post::create([
            'user_id'=>'2',
            'title' => 'post title 2'
        ]);
        Post::create([

            'title' => 'post title 3'
        ]);
        Post::create([
            'user_id'=>'1',
            'title' => 'post title 4'
        ]);
    }
}
