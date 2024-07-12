<?php

use App\Models\Movies;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MoviesController;

Route::get('/', function () {
    $movies=Movies::get();
    return view('welcome',compact('movies'));
});
Route::get('aboutus', function () {
return view('about');
});
Route::get('policy', function () {
    return view('policy');
    });

Route::get('movies/{id}',[MoviesController::class,'show'])->name('movies');

Route::resource('contact', ContactController::class);

