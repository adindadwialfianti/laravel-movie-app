<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'ID' => 1,
            'Name' => 'Jojo Bizarre Adventure',
            'Poster' => 'movie-01.jpg',
            'Description' => 'Jojos Bizarre Adventure is a story about the Joestar family'
        ],

        [
            'ID' => 2,
            'Name' => 'Noragami',
            'Poster' => 'movie-02.jpg',
            'Description' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god'
        ],

        [
            'ID' => 3,
            'Name' => 'Wind Breaker',
            'Poster' => 'movie-03.jpg',
            'Description' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong'
        ],

        [
            'ID' => 4,
            'Name' => 'Spy x family',
            'Poster' => 'movie-04.jpg',
            'Description' => 'A spy and an assassin keep their double lives to themselves while pretending to be the perfect family.'
        ],

        [
            'ID' => 5,
            'Name' => 'Doraemon stand by me',
            'Poster' => 'movie-05.jpg',
            'Description' => 'Di pinggiran kota Tokyo, hiduplah seorang anak laki-laki canggung berusia sekitar 10 tahun. Muncullah didepannya seseorang bernama Sewashi, keturunan Nobita generasi keempat pada abad ke-22, dan Doraemon kucing robot penjaga pada abad 22 yang membantu orang dengan gadget rahasianya.'
        ],

    ] ;
    
    public function getAllGenres()
    {
        return $this-> genres;
    }
}