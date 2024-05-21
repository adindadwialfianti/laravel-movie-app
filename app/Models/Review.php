<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'ID' => 1,
            'Poster' => 'movie-01.jpg',
            'Movie' => 'Jojo Bizarre Adventure',
            'User' => 'adinda',
            'Rating' => '1/10',
            'Date' => '01/07/24'
        ],

        [
            'ID' => 2,
            'Poster' => 'movie-02.jpg',
            'Movie' => 'Noragami',
            'User' => 'nathania',
            'Rating' => '2/10',
            'Date' => '02/07/24'
        ],

        [
            'ID' => 3,
            'Poster' => 'movie-03.jpg',
            'Movie' => 'Wind Breaker',
            'User' => 'audy',
            'Rating' => '3/10',
            'Date' => '03/07/24'
        ],

        [
            'ID' => 4,
            'Poster' => 'movie-04.jpg',
            'Movie' => 'spy x family',
            'User' => 'najah',
            'Rating' => '4/10',
            'Date' => '04/07/24'
        ],

        [
            'ID' => 5,
            'Poster' => 'movie-05.jpg',
            'Movie' => 'doraemon stand by me',
            'User' => 'putri',
            'Rating' => '5/10',
            'Date' => '05/07/24'
        ],

    ] ;
    
    public function getAllReviews()
    {
        return $this-> reviews;
    }
}