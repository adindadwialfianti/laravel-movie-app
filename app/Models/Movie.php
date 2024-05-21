<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'ID' => 1,
            'Title' => 'Jojo Bizarre Adventure',
            'Poster' => 'movie-01.jpg',
            'Genre' => 'Shounen',
            'Synopsis' => 'Jojos Bizarre Adventure is a story about the Joestar family'
        ],

        [
            'ID' => 2,
            'Title' => 'Noragami',
            'Poster' => 'movie-02.jpg',
            'Genre' => 'Drama',
            'Synopsis' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god'
        ],

        [
            'ID' => 3,
            'Title' => 'Wind Breaker',
            'Poster' => 'movie-03.jpg',
            'Genre' => 'Action',
            'Synopsis' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong'
        ],

    ] ;
    
    public function getAllMovies()
    {
        return $this-> movies;
    }
}