<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::post('/movie', [ContactController::class, 'movi']);



