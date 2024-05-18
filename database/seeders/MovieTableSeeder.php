<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use League\CommonMark\Normalizer\SlugNormalizer;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            [
                'name' => 'top gun',
                'slug' => 'top gun',
                'category' => 'top gun',
                'video_url' => 'https://www.youtube.com/watch?v=UfCzFR8KzpE',
                'thumbnail' => 'https://i.pinimg.com/736x/d8/09/03/d80903b51b445a7070550d2da389c5e2.jpg',
                'rating' => 9.4,
                'is_feature' => 1,
            ],   [
                'name' => 'top gun 2',
                'slug' => 'top gun',
                'category' => 'top gun',
                'video_url' => 'https://www.youtube.com/watch?v=UfCzFR8KzpE',
                'thumbnail' => 'https://i.pinimg.com/736x/d8/09/03/d80903b51b445a7070550d2da389c5e2.jpg',
                'rating' => 9.4,
                'is_feature' => 0,

            ],   [
                'name' => 'top gun 3',
                'slug' => 'top gun',
                'category' => 'top gun',
                'video_url' => 'https://www.youtube.com/watch?v=UfCzFR8KzpE',
                'thumbnail' => 'https://i.pinimg.com/736x/d8/09/03/d80903b51b445a7070550d2da389c5e2.jpg',
                'rating' => 9.4,
                'is_feature' => 0,

            ],
        ];

        Movie::insert($movies);
    }

}