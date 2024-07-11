<?php

namespace App\Http\Controllers;

use App\Models\BienImmo;
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
}
