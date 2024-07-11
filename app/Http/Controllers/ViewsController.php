<?php

namespace App\Http\Controllers;

use App\Models\BienImmo;
use Illuminate\Http\Request;

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
        $propertyDetails = BienImmo::with(['getTypeBien','getImages'])->findOrFail($id);
        return view('detail-property', compact('propertyDetails'));
    }
}
