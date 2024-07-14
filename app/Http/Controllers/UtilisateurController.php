<?php

namespace App\Http\Controllers;

use App\Models\DemandeContact;
use App\Models\Utilisateur;
use App\Models\Favori;
use App\Models\Recherche;
use App\Models\TypeBien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class UtilisateurController extends Controller
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
        $newUser->mot_de_passe = Hash::make($validatedData['password2']);
        $newUser->role_id = 2;

        $newUser->save();

        Session::flash('user_alert_message', 'Votre compte a été crée avec succès, vous pouvez dès à présent vous connecter !');

        return redirect('/');
    }


    // Check if the user's mail already exists in the database (for the client's side verification)
    public function verifyExistingUser(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = Utilisateur::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->mot_de_passe)) {
            return response()->json(['existingUser' => true]);
        }

        return response()->json(['existingUser' => false, 'message' => 'Aucun utilisateur avec ces données de connexion n\'a été trouvé !']);
    }


    // Check the user's data entered in the login form, and connect it if they are valid.
    public function connectUser(Request $request) {
        $request->validate([
            'mail' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('mail', 'password');

        $user = Utilisateur::where('email', $credentials['mail'])->first();

        if ($user && Hash::check($credentials['password'], $user->mot_de_passe)) {
            // If success login
            session_start();
            $_SESSION['user'] = [
                'id' => $user->id_client,
                'prenom' =>  $user->prenom,
                'nom' => $user->nom,
                'email' => $user->email,
                'telephone' => $user->telephone,
                'mot_de_passe' => $credentials['password'],
                'role' => $user->getUserRole->intitule_role,
            ];

            return redirect()->back();
        }

        // If fail login
        return redirect()->back()->withErrors([
            'error' => 'Adresse mail ou mot de passe invalide.',
        ]);
    }

    // Add a property in favorites
    public function addFavorite(Request $request){
        session_start();

        Favori::create([
            'id_client' => $_SESSION['user']['id'],
            'id_bienImmo' => $request->input('id_bienImmo'),
            'date_ajout' => now()->format('Y-m-d'),
        ]);


        return response()->json(['registeredFavorite' => true, 'message' => 'Ce bien à été ajouté à vos favoris ! Retrouvez-les tous depuis votre compte.']);
    }

    // Remove a property from favorites
    public function removeFavorite(Request $request){
        session_start();

        if (!isset($_SESSION['user'])) {
            return response()->json(['removedFavorite' => false, 'message' => 'Aucun utilisateur n\'est connecté !']);
        }

        $id_client = $_SESSION['user']['id'];
        $id_bienImmo = $request->input('id_bienImmo');

        DB::table('favoris')->where('id_client', $id_client)->where('id_bienImmo', $id_bienImmo)->delete();

        return response()->json(['removedFavorite' => true, 'message' => 'Ce bien à été retiré de vos favoris !']);
    }

    // Register the user's search in the database
    public function saveSearch(Request $request)
    {
        session_start();

        $validatedData = $request->validate([
            'propertyStatus' => 'required|in:acheter,louer',
            'propertyType' => 'required|string',
            'propertyKeywords' => 'nullable|string',
            'propertyCity' => 'nullable|string',
            'propertyMinPrice' => 'nullable|numeric',
            'propertyMaxPrice' => 'nullable|numeric'
        ]);

        $typeBien = TypeBien::where('intitule_type', $validatedData['propertyType'])->firstOrFail();

        $recherche = new Recherche();

        $recherche->date_enregistrement_recherche = Carbon::now();
        $recherche->id_client = $_SESSION['user']['id'];
        $recherche->id_typeBien = $typeBien->id_typeBien;
        $recherche->achat = $validatedData['propertyStatus'] === 'acheter';
        $recherche->mots_cles = $validatedData['propertyKeywords'];
        $recherche->ville = $validatedData['propertyCity'];
        $recherche->budget_min = $validatedData['propertyMinPrice'];
        $recherche->budget_max = $validatedData['propertyMaxPrice'];

        $recherche->save();

        return response()->json(['searchRegistered' => true]);
    }

    // Send a contact request
    public function sendContactRequest(Request $request){
        $validatedData = $request->validate([
            'contact-lastname' => 'required|string|max:255',
            'contact-firstname' => 'required|string|max:255',
            'contact-mail' => 'required|email|max:255',
            'contact-phonenum' => 'required|string|max:20',
            'contact-message' => 'nullable|string',
            'id_bienImmo' => 'nullable|integer|exists:biens_immo,id_bienImmo'
        ]);

        $demandeContact = new DemandeContact();
        $demandeContact->nom_demandeur = $validatedData['contact-lastname'];
        $demandeContact->prenom_demandeur = $validatedData['contact-firstname'];
        $demandeContact->mail_demandeur = $validatedData['contact-mail'];
        $demandeContact->contenu_demande = $validatedData['contact-message'] ?? '';
        $demandeContact->id_bienImmo = $validatedData['id_bienImmo'] ?? null;
        $demandeContact->save();

        return redirect()->back()->with('user_alert_message', 'Merci, votre demande de contact nous a bien été transmise. Nous vous répondrons sous 72 heures !');
    }


    public function checkConnectedUser(Request $request)
    {
        session_start();

        $isConnected = isset($_SESSION['user']) && !empty($_SESSION['user']);

        return response()->json([
            'isConnected' => $isConnected
        ]);
    }

    // Logout the user and redirect in the previous page if it's possible
    public function logoutUser(){
        session_start();
        session_destroy();

        // Redirect to the previous page or home if not available
        return redirect()->back()->getTargetUrl() !== url()->current()
            ? redirect()->back()
            : redirect('/');
    }

}
