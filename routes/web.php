<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\PropertyController;


/************************
 * Templates' redirections
 **************************/

// Go to the homepage
Route::get('/', function () {
    return view('homepage');
})->name('homepage');

// Go to the properties' listing
Route::get('/listing-property', function () {
   return view('listing-property');
})->name('listing-property');

// Go to the property's detail
Route::get('/detail-property', function () {
    return view('detail-property');
})->name('detail-property');

/*************************
 * Forms' submissions
 *************************/

// Get the form submission of properties' search
Route::post('/search-property', [PropertyController::class, 'search'])->name('search-property');
