<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function show(string $id)
{
    $movie = Movies::with('movieurl')->where('status','active')->findOrFail($id);

    // Initialize empty collections
    $data['movies'] = collect();
    $data['webseries'] = collect();

    // Separate into movies and web series based on category
    if ($movie->category === 'movies') {
        $data['movies']->push($movie);
    } elseif ($movie->category === 'webseries') {
        $data['webseries']->push($movie);
    }

    return view('movies.show', $data);
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
