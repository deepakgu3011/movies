<?php

use App\Models\Movies;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\SitemapController;
use Illuminate\Http\Request;

// Route::get('/', function () {
//     $movies=Movies::get();
//     return view('welcome',compact('movies'));
// });

Route::get('/', function (Request $request) {
    $query = Movies::where('status', 'active');

    if ($request->has('name')) {
        $name = $request->input('name');
        $query->where('name', '=', $name);
    }

    $movies = $query->paginate(10);

    if ($movies->isEmpty() && $request->has('name')) {
        return redirect()->back()->with('fail', 'No Result Found!');
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

Route::get('sitemap',[SitemapController::class,'index'])->name('index');


require __DIR__.'/api.php';