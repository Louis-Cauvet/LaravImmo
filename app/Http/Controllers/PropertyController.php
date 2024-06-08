<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function search(Request $request)
    {
       // Traitement des données du formulaire

        return redirect()->route('listing-property');
    }
}
