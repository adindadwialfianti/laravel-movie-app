<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    Review::create([
        'id' => 1,
        'movie_id' => '1',
        'user' => 'adinda',
        'rating' => '1/10',
        'date' => '01/07/24',
    ]);

    Review::create([
        'id' => 2,
        'movie_id' => '2',
        'user' => 'nathania',
        'rating' => '2/10',
        'date' => '02/07/24'
    ]);

    Review::create([
        'id' => 3,
        'movie_id' => '3',
        'user' => 'audy',
        'rating' => '3/10',
        'date' => '03/07/24'
    ]);

    Review::create([
        'id' => 4,
        'movie_id' => '4',
        'user' => 'najah',
        'rating' => '4/10',
        'date' => '04/07/24'
    ]);

    Review::create([
        'id' => 5,
        'movie_id' => '5',
        'user' => 'putri',
        'rating' => '5/10',
        'date' => '05/07/24'
    ]);
}
}
        