<?php

use App\Models\Movies;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MoviesController;
use Illuminate\Http\Request;

// Route::get('/', function () {
//     $movies=Movies::get();
//     return view('welcome',compact('movies'));
// });

Route::get('/', function (Request $request) {
    if ($request->has('name')) {
        $name = $request->input('name');
        $movies = Movies::where('name', '=', $name)->paginate(10);
         if ($movies->isempty()) {
           return redirect()->back()->with('fail','No Result Found!');
        }
    } else {
        $movies = Movies::paginate(10);
    }

    return view('welcome', compact('movies'));
});

Route::get('aboutus', function () {
return view('about');
});
Route::get('policy', function () {
    return view('policy');
    });

Route::get('movies/{id}',[MoviesController::class,'show'])->name('movies');

Route::resource('contact', ContactController::class);

require __DIR__.'/api.php';