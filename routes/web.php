<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\BienController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\ViewsController;

Route::middleware(['web'])->group(function () {

    /************************
     * TEMPLATE'S REDIRECTIONS
     **************************/

    // Go to the homepage
    Route::get('/', [ViewsController::class, 'showHomepage'])->name('homepage');

    // Go to the properties' listing
    Route::get('/listing-property', [BienController::class, 'showAllProperties'])->name('listing-property');

    // Go to the property's detail
    Route::get('/detail-property/{id}', [ViewsController::class, 'showPropertyDetail'])->name('detail-property');

    // Go to the contact's page
    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    // Go to the sale property's page
    Route::get('/sale-form', function () {
        return view('sale-form');
    })->name('sale-form');

    // Go to the user account's page
    Route::get('user-account', [ViewsController::class, 'showUserAccount'])->name('user-account');

    // Go to the admin account's page
    Route::get('/admin-account', [ViewsController::class, 'showAdminAccount'])->name('admin-account');


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

    // Check if the user is connected to his account
    Route::post('/check-user-connected', [UtilisateurController::class, 'checkConnectedUser'])->name('check-user-connected');

    // Check the property's datas when the user try to purpose a new property
    Route::post('/register-property', [BienController::class, 'registerProperty'])->name('register-property');

    // Get the form submission of properties' search
    Route::get('/search-properties', [BienController::class, 'searchProperties'])->name('search-properties');

    // Get the form submission of contact request
    Route::post('/send-contact-request', [UtilisateurController::class, 'sendContactRequest'])->name('send-contact-request');

    // Get the form submission of update user
    Route::post('/update-user', [UtilisateurController::class, 'updateUser'])->name('update-user');

    // Get the form submission of client's notification
    Route::post('/send-notification-client', [UtilisateurController::class, 'sendNotificationClient'])->name('send-notification-client');


    /*************************
     * OTHER ACTIONS
     *************************/

    // Add a property as user's favorite
    Route::post('/add-favorite', [UtilisateurController::class, 'addFavorite'])->name('add-favorite');

    // Remove a property from user's favorite
    Route::post('/remove-favorite', [UtilisateurController::class, 'removeFavorite'])->name('remove-favorite');

    // Load and display the following 6 properties
    Route::post('/load-more-properties', [BienController::class, 'loadMoreProperties'])->name('load-more-properties');

    // Save the user's search
    Route::post('/save-search', [UtilisateurController::class, 'saveSearch'])->name('save-search');

    // Retake the user's search registered in database
    Route::get('retake-search/{id}', [BienController::class, 'retakeUserSearch'])->name('retake-search');

    // Delete a search registered in database
    Route::delete('/delete-search/{id}', [UtilisateurController::class, 'deleteUserSearch'])->name('delete-search');

    // Delete a contact request registered in database
    Route::delete('/delete-contact-request/{id}', [UtilisateurController::class, 'deleteContactRequest'])->name('delete-contact-request');

    // Change the property's visibility
    Route::post('change-visibility-property/{id}', [BienController::class, 'changeVisibilityProperty'])->name('change-visibility-property');

    // Delete a property
    Route::post('delete-property/{id}', [BienController::class, 'deleteProperty'])->name('delete-property');

    // Logout the connected user
    Route::get('/logout-user', [UtilisateurController::class, 'logoutUser'])->name('logout-user');
});
