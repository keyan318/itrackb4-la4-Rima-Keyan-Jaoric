<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/whoami', function(){
    return('Keyan Jaoric V. Rima | 2023-71408 | Block 4A | ITRACKB4 Laravel 12');
});

Route::get('/students', [StudentController::class, 'index']);   

Route::get('/movies', [MovieController::class, 'index']);