<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Video::create([
            'title' => 'Example Video title 1'
        ]);
        Video::create([
            'title' => 'Example Video title 2'
        ]);
    }
}
