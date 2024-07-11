<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('aboutus', function () {
return view('about');
});
Route::get('policy', function () {
    return view('policy');
    });

Route::resource('contact', ContactController::class);

