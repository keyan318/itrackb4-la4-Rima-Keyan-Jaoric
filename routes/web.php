<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/whoami', function(){
//     return('Keyan Jaoric V. Rima | 2023-71408 | Block 4A | ITRACKB4 Laravel 12');
// });

// Route::get('/students', [StudentController::class, 'index']);   

Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');

// Route::get('/appname', function(){
//     return 'config() says' . config('app.name')
//     . ' | env says ' . env('APP_NAME');
// });

// Route::get('/show/{$id}', [StudentController::class, 'show'])
// ->name('students.show');



Route::get('/movies/featured', [MovieController::class, 'featured' ])->name('movies.featured');
Route::get('/movies/filter/{value?}', [MovieController::class, 'filter'])->name('movies.filter');
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show');

