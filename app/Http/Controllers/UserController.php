<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    // Check if the user's mail already exists in the database (for the client's side verification)
    public function checkExistingEmail(Request $request) {

        $email = $request->input('email');
        $exists = Utilisateur::where('email', $email)->exists();

        // Return a boolean 'true' if the email is already exists, false else
        return response()->json(['existingEmail' => $exists]);
    }


    // Check the user's data entered in the registration form, and saves it in the database if everything is correct (server's side verification)
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

        Session::flash('user_alert_message', 'Votre compte a été crée avec succès, vous pouvez dès à présent vous connecter !');

        return redirect('/');
    }


    // Check the user's data entered in the login form, and connect it if they are valid.
    public function connectUser(Request $request) {
        $credentials = $request->only('mail', 'password');

        $user = Utilisateur::where('email', $credentials['mail'])->first();

        if ($user && $user->mot_de_passe === $credentials['password']) {
            // If success login
            Auth::login($user);
            return view('homepage');
        }

        // If fail login
        return redirect()->back()->withErrors([
            'error' => 'Adresse mail ou mot de passe invalide.',
        ]);
    }
}
