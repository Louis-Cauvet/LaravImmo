<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registerUser(Request $request) {

        $validatedData = $request->validate([
            'firstname' => 'required|string|max:50',
            'lastname' => 'required|string|max:50',
            'phone' => 'required|string|max:15|regex:/^[0-9]+$/',
            'mail2' => 'required|string|email|max:75|unique:Utilisateurs,email',
            'password2' => ['required', 'string', 'min:8', 'confirmed', 'regex:/[0-9]/', 'regex:/[a-zA-Z]/', 'regex:/[!@#$%^&*(),.?":{}|<>]/'],
        ]);

        $newUser = new Utilisateur();
        $newUser->prenom = $validatedData['firstname'];
        $newUser->nom = $validatedData['lastname'];
        $newUser->telephone = $validatedData['phone'];
        $newUser->email = $validatedData['mail2'];
        $newUser->mot_de_passe = $validatedData['password2'];
        $newUser->role_id = 2;

        $newUser->save();

//        Session::flash('success', 'Votre compte a été crée avec succès, vous pouvez dès à présent vous connecter !');

        return redirect('/')->with('register_user_success', 'Votre compte a été crée avec succès, vous pouvez dès à présent vous connecter !!');
    }
}
