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

// Go to the contact's page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Go to the sale property's page
Route::get('/sale-form', function () {
    return view('sale-form');
})->name('sale-form');

/*************************
 * Forms' submissions
 *************************/

// Get the form submission of properties' search
Route::post('/search-property', [PropertyController::class, 'search'])->name('search-property');
