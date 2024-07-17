<?php

namespace App\Http\Controllers;

use App\Models\BienImmo;
use App\Models\Utilisateur;
use App\Models\Favori;
use App\Models\Recherche;
use App\Models\AlerteClient;
use App\Models\DemandeContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewsController extends Controller
{
    // Get the 3 most recent properties before go to the homepage
    public function showHomepage() {
        $recentProperties = BienImmo::where('disponible', 1)->orderBy('created_at', 'desc')->take(3)->with('getImages')->get();
        return view('homepage', ['recentProperties' => $recentProperties]);
    }

    // Get the detail of the properties which have his id in the url before go to the property's detail page
    public function showPropertyDetail($id)
    {
        session_start();

        $propertyDetails = BienImmo::with(['getTypeBien','getImages'])->findOrFail($id);

        $isFavorited = false;
        if(isset($_SESSION['user'])) {
            $id_client = $_SESSION['user']['id'];
            $isFavorited = DB::table('favoris')->where('id_client', $id_client)->where('id_bienImmo', $id)->exists();
        }

        return view('detail-property', compact('propertyDetails', 'isFavorited'));
    }


    // Get the user's favorites properties & registered researches for display them in the user account page
    public function showUserAccount() {
        session_start();

        if (!isset($_SESSION['user'])) {
            $homeUrl = route('homepage');

            header('Location: ' . $homeUrl);
            exit();
        }

        $id_user = $_SESSION['user']['id'];
        $favorites = Favori::where('id_client', $id_user)->whereHas('getBienImmo', fn($query) => $query->where('disponible', 1))->with('getBienImmo')->orderBy('created_at', 'desc')->get();
        $researches = Recherche::where('id_client', $id_user)->with('getTypeBien')->orderBy('created_at', 'desc')->get();
        $notifications = AlerteClient::where('id_client', $id_user)->orderBy('created_at', 'desc')->get();

        return view('user-account', compact('favorites', 'researches', 'notifications'));
    }


    // Get the contact requests for display them in the admin account page
    public function showAdminAccount() {
        $contactRequests = DemandeContact::all();
        $biens = BienImmo::all();
        $clients = Utilisateur::where('role_id', 2)->get();

        return view('admin-account', compact('contactRequests', 'biens', 'clients'));
    }
}
