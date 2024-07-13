<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MoviesController;
use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    if ($request->has('name')) {
        $name = $request->input('name');
        $movies = Movies::where('name', '=', $name)->get();
        if($movies->isempty()){
            return redirect()->back()->with('fail','Result Not Found!');
        }
    } else {
        $movies = Movies::all();
    }

    return view('welcome', compact('movies'));
});
Route::get('aboutus', function () {
    return view('about');
});
Route::get('policy', function () {
    return view('policy');
});

Route::get('movies/{id}', [MoviesController::class, 'show'])->name('movies');

Route::resource('contact', ContactController::class);
