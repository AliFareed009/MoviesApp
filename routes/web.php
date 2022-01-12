<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MovieController;
use App\Http\Controllers\ActorsController;


//  Route::get('/', [MovieController::class,'index']);

 Route::get('/', 'MovieController@index')->name('movies.index');

Route::get('/movies/{movie}', 'MovieController@show')->name('movies.show');

Route::get('/actors', 'ActorsController@index')->name('actors.index');


Route::get('/actors/{actor}', 'ActorsController@show')->name('actors.show');


