<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $items=$this->getItems();
       

        return view('movies.index', ['items' => $items]);
    }

    private function getItems(){
       return[
        1 =>[
            'id' => 1, 
            'title' => 'Inception',
            'genre' => 'Science Fiction',
            'year' => 2010,
            'director' => 'Christopher Nolan',
            'rating' => 8.8,
            'duration' => '2h 28m',

        
        ],

        2 => [
            'id' => 2,
            'title' => 'Interstellar', 
            'genre' => 'Science Fiction',
            'year' =>  2014,
            'director' => 'Christopher Nolan',
            'rating' => 8.7,
            'duration' => '2h 49m',
        ],
        3 =>[
            'id' => 3,
            'title' => 'The Dark Knight',
            'genre' => 'Action',
            'year' => 2008,
            'director' => 'Christopher Nolan',
            'rating' => 9.0,
            'duration' => '2h 32m',
        ],
        4 => [
            'id' => 4,
            'title' => 'Avengers: Endgame',
            'genre' => 'Superhero',
            'year' => 2019,
            'director' => 'Anthony Russo, Joe Russo',
            'rating' => 8.4,
            'duration' => '3h 2m',
        ],
        5 => [
            'id' => 5,
            'title' => 'Spiderman: No Way Home',
            'genre' => 'Superhero',
            'year' => 2021,
            'director' => 'Jon Watts',
            'rating' => 8.9,
            'duration' => '2h 28m',
        ],
        6 => [
            'id' => 6,
            'title' => 'The Martrix',
            'genre' => 'Science Fiction',
            'year' => 1999,
            'director' => 'The Wachowskis',
            'rating' => 8.7,
            'duration' => '2h 16m',
        ],
        ];
       
    }

    public function show($id){
        $items=$this->getItems();

        if(!isset($items[$id])){
            abort(404);
        }
        return view('movies.show', ['item' => $items[$id]]);
    }

    public function featured(){
        $items=$this->getItems();
        return view('movies.show', ['item' => $items[1]]);
    }

    public function filter($value = null){
        $items = $this->getItems();

        if($value !== null){
            $filtered =[];
            foreach ($items as $item){
                if ($item['genre'] ==$value) {
                    $filtered[]= $item;
                }
            }
        }else{
            $filtered=$items;
        }
        return view('movies.filtered', ['items' => $filtered, 'value' => $value]);
    }
}
