<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\PropertyController;


/************************
 * Templates' redirections
 **************************/

// Display the homepage by default
Route::get('/', function () {
    return view('homepage');
})->name('homepage');

// Display the properties' listing
Route::get('/listing-property', function () {
   return view('listing-property');
})->name('listing-property');

/*************************
 * Forms' submissions
 *************************/

// Get the form submission of properties' search
Route::post('/search-property', [PropertyController::class, 'search'])->name('search-property');
