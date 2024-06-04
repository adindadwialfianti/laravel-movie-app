<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'id' => 1,
            'name' => 'action',
            'description' => 'Jojos Bizarre Adventure is a story about the Joestar family',
        ]);

        Genre::create([
            'id' => 2,
            'name' => 'shounen',
            'description' => '
            Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god',
        ]);

        Genre::create([
            'id' => 3,
            'name' => 'romance',
            'description' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong',
        ]);

        Genre::create([
            'id' => 4,
            'name' => 'school',
            'description' => 'Drama adalah genre (jenis) karya sastra yang menggambarkan kehidupan manusia dengan gerak',
        ]);

        Genre::create([
            'id' => 5,
            'name' => 'horor',
            'description' => 'Drama adalah genre (jenis) karya sastra yang menggambarkan kehidupan manusia dengan gerak',
        ]);
    }
}
