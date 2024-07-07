<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    // Check if an user is connected for control the access to private pages
    public function checkUserConnected($view) {
        session_start();

        var_dump("couocu"); die;

        if (!isset($_SESSION['user'])) {
            return redirect()->route('homepage');
        }

        return view($view);
    }
}
