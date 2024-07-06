<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;


/************************
 * TEMPLATE'S REDIRECTIONS
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

// Go to the user account's page
Route::get('/user-account', function () {
    return view('user-account');
})->name('user-account');

// Go to the admin account's page
Route::get('/admin-account', function () {
    return view('admin-account');
})->name('admin-account');


/*************************
 * FORM' SUBMISSIONS
 *************************/

// Get the form submission of properties' search
Route::post('/search-property', [PropertyController::class, 'search'])->name('search-property');

// Check if the user's mail already exists in database
Route::post('/check-email', [UserController::class, 'checkExistingEmail'])->name('check-email');

// Check the user's datas when he tried to create his account
Route::post('/register-user', [UserController::class, 'registerUser'])->name('register-user');

// Check the user's datas when he tried to create his account
Route::post('/connect-user', [UserController::class, 'connectUser'])->name('connect-user');
