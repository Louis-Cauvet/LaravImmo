<?php

namespace App\Http\Controllers;

use App\Models\BienImmo;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BienController extends Controller
{
    public function search(Request $request)
    {
        return redirect()->route('listing-property');
    }

    // Check the property's data before register it in te database
    public function registerProperty(Request $request) {

        $validateData = $request->validate([
            'property-status' => 'required|in:A vendre,A louer',
            'property-type' => 'required|in:maison,appartement,terrain',
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postal' => 'required',
            'area' => 'required|numeric',
            'nb_rooms' => 'required|numeric',
            'nb_bedrooms' => 'required|numeric',
            'nb_bathrooms' => 'required|numeric',
            'has_garage' => 'sometimes|boolean',
            'has_land' => 'sometimes|boolean',
            'has_new' => 'sometimes|boolean',
            'photos' => 'required|array|min:1',
        ]);

        $typeBienMap = [
            'maison' => 1,
            'appartement' => 2,
            'terrain' => 3,
        ];

        $typeBienId = $typeBienMap[$validateData['property-type']];

        // Register the new property in the database
        $property = BienImmo::create([
            'typeBien_id' => $typeBienId,
            'titre_annonce' => $validateData['title'],
            'contenu_annonce' => $validateData['description'],
            'prix' => $validateData['price'],
            'adresse' => $validateData['address'],
            'ville' => $validateData['city'],
            'code_postal' => $validateData['postal'],
            'surface' => $validateData['area'],
            'nb_pieces' => $validateData['nb_rooms'],
            'nb_chambres' => $validateData['nb_bedrooms'],
            'nb_sdb' => $validateData['nb_bathrooms'],
            'achat' => $validateData['property-status'] === 'A vendre',
            'neuf' => $request->has('has_new'),
            'garage' => $request->has('has_garage'),
            'terrain' => $request->has('has_land'),
            'disponible' => true,
        ]);


        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $path = $photo->store('photos', 'public');
                Image::create([
                    'id_bien' => $property->id_bienImmo,
                    'image_path' => $path,
                ]);
            }
        }

        Session::flash('user_alert_message', 'Merci, votre propriété à bien été ajoutée à notre site, elle sera consultable très rapidemment !');

        return redirect()->route('sale-form');
    }
}
