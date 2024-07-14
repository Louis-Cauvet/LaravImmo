<?php

namespace App\Http\Controllers;

use App\Models\BienImmo;
use App\Models\Image;
use App\Models\Recherche;
use App\Models\TypeBien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class BienController extends Controller
{
    // Get the properties which corresponds to all the user's criterias
    public function searchProperties(Request $request)
    {
        session_start();

        $query = BienImmo::query()->where('disponible', 1);

        $query->join('types_biens', 'biens_immo.typeBien_id', '=', 'types_biens.id_typeBien');

        // Property's status filter
        if (!is_null($request['property-status'])) {
            $isAchat = $request->input('property-status') === 'acheter' ? 1 : 0;
            $query->where('achat', $isAchat);
        }

        // Property's type filter
        if (!is_null($request['property-type'])) {
            $query->where('types_biens.intitule_type', $request->input('property-type'));
        }

        // Property's keywords filter
        if (!is_null($request['property-keywords'])) {
            $keywords = $request->input('property-keywords');
            $query->where(function ($q) use ($keywords) {
                $q->where('titre_annonce', 'like', "%$keywords%")
                    ->orWhere('contenu_annonce', 'like', "%$keywords%");
            });
        }

        // Property's city filter
        if (!is_null($request['property-city'])) {
            $query->where('ville', 'like', "%".$request->input('property-city')."%");
        }

        // Property's budget filters
        if (!is_null($request['property-min-price'])) {
            $query->where('prix', '>=', $request->input('property-min-price'));
        }
        if (!is_null($request['property-max-price'])) {
            $query->where('prix', '<=', $request->input('property-max-price'));
        }

        $properties = $query->paginate(6);

        // Check if the search already exists
        $typeBien = TypeBien::where('intitule_type', $request->input('property-type'))->first();
        if (isset($_SESSION['user']['id'])) {
            $searchExists = Recherche::where('id_client', $_SESSION['user']['id'])
                ->where('id_typeBien', $typeBien->id_typeBien)
                ->where('achat', $isAchat)
                ->where('mots_cles', $request->input('property-keywords'))
                ->where('ville', $request->input('property-city'))
                ->where('budget_min', $request->input('property-min-price'))
                ->where('budget_max', $request->input('property-max-price'))
                ->exists();
        } else {
            $searchExists = '';
        }

        return view('listing-property', compact('properties', 'request', 'searchExists'));
    }

    // Get all the properties for display them in the listing page
    public function showAllProperties()
    {
        $properties = BienImmo::where('disponible', 1)->paginate(6);

        return view('listing-property', compact('properties'));
    }

    // Load and display the following 6 properties
    public function loadMoreProperties(Request $request) {
        $page = $request->input('page', 1);
        $perPage = 6;

        $properties = BienImmo::where('disponible', 1)->with('getImages')->paginate($perPage, ['*'], 'page', $page);

        $properties->getCollection()->transform(function ($property) {
            $property->image_url = $property->getImages->first() ? asset('storage/' . $property->getImages->first()->image_path) : null;
            $property->prix_formatted = number_format($property->prix, 0, ',', ' ');
            return $property;
        });


        return response()->json([
            'properties' => $properties->items(),
            'next_page' => $properties->hasMorePages() ? $properties->currentPage() + 1 : null,
        ]);
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
