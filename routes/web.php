<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\BienController;
use App\Http\Controllers\UtilisateurController;

Route::middleware(['web'])->group(function () {

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

    Route::get('/logout-user', [UtilisateurController::class, 'logoutUser'])->name('logout-user');


    /*************************
     * FORM' SUBMISSIONS
     *************************/

    // Check if the user's mail already exists in database
    Route::post('/check-email', [UtilisateurController::class, 'checkExistingEmail'])->name('check-email');

    // Check the user's datas when he tried to create his account before register it if it's good
    Route::post('/register-user', [UtilisateurController::class, 'registerUser'])->name('register-user');

    // Check if the user's mail already exists in database
    Route::post('/verify-user', [UtilisateurController::class, 'verifyExistingUser'])->name('verify-user');

    // Check the user's datas when he tried to login to his account
    Route::post('/connect-user', [UtilisateurController::class, 'connectUser'])->name('connect-user');

    // Check the property's datas when the user try to purpose a new property
    Route::post('/register-property', [BienController::class, 'registerProperty'])->name('register-property');

    // Get the form submission of properties' search
    Route::post('/search-property', [BienController::class, 'search'])->name('search-property');
});
