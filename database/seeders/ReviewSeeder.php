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
        'movie' => 'Jojo Bizarre Adventure',
        'user' => 'adinda',
        'rating' => '1/10',
        'date' => '01/07/24',
    ]);

    Review::create([
        'id' => 2,
        'movie' => 'Noragami',
        'user' => 'nathania',
        'rating' => '2/10',
        'date' => '02/07/24'
    ]);

    Review::create([
        'id' => 3,
        'movie' => 'Wind Breaker',
        'user' => 'audy',
        'rating' => '3/10',
        'date' => '03/07/24'
    ]);

    Review::create([
        'id' => 4,
        'movie' => 'spy x family',
        'user' => 'najah',
        'rating' => '4/10',
        'date' => '04/07/24'
    ]);

    Review::create([
        'id' => 5,
        'movie' => 'doraemon stand by me',
        'user' => 'putri',
        'rating' => '5/10',
        'date' => '05/07/24'
    ]);
}
}
        