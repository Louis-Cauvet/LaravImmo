@php

    // The session is started in the viewsController

    if (isset($_SESSION['user'])) {
      $user = $_SESSION['user'];
    }
@endphp

@extends('base')

@section('title', $propertyDetails->titre_annonce)

@section('content')
    <main>
        <div class="inner-page property-presentation">
            <h1>{{ $propertyDetails->titre_annonce }}</h1>
            <div class="presentation-header">
                <div>
                    <p class="h-color-secondary h-fz-22 h-fw-bold">{{ number_format($propertyDetails->prix, 2, ',', ' ') }} €</p>
                    <p class="h-fz-18 h-color-primary">{{ $propertyDetails->code_postal }} {{ $propertyDetails->ville }}</p>
                </div>
                <button id="add-to-favorite" class="a-button h-bg-primary @if($isFavorited) as--favorite" title="Retirer des favoris" @else title="Ajouter aux favoris" @endif data-id-bien="{{ $propertyDetails->id_bienImmo }}">
                    <i class="fa-solid fa-heart"></i>
                </button>

            </div>
            <div id="error-check-user-connected"></div>

            <section class="property-carrousel">
                <div class="carrousel-current-img">
                    <i class="slider-arrow arrow-left fa-solid fa-angle-left"></i>
                    <div class="slider">
                        @foreach ($propertyDetails->getImages as $index => $image)
                            <article>
                                <div class="img-container">
                                    <img src="{{ asset('storage/' . $image->image_path) }}" alt="Image du bien n°{{ $index + 1 }}">
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <i class="slider-arrow arrow-right fa-solid fa-angle-right"></i>
                </div>
                <ul class="slider-tags">
                    @foreach ($propertyDetails->getImages as $index => $image)
                        <li data-position="{{ $index }}" @if ($index == 0)  class="active" @endif>
                            <div class="img-container">
                                <img src="{{ asset('storage/' . $image->image_path) }}" alt="Tag de l'image n°{{ $index + 1 }}">
                                <i class="fa-solid fa-check"></i>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </section>

            <section class="property-criterias">
                <ul>
                    <li>
                        <i class="fa-solid fa-handshake"></i>
                        <p>{{ $propertyDetails->achat ? 'A vendre' : 'A louer' }}</p>
                    </li>

                    <li>
                        @if ($propertyDetails->getTypeBien->intitule_type == 'maison')
                            <i class="fa-solid fa-house"></i>
                            <p>Maison</p>
                        @elseif ($propertyDetails->getTypeBien->intitule_type == 'appartement')
                            <i class="fa-solid fa-building"></i>
                            <p>Appartement</p>
                        @elseif ($propertyDetails->getTypeBien->intitule_type == 'terrain')
                            <i class="fa-solid fa-leaf"></i>
                            <p>Terrain</p>
                        @endif
                    </li>

                    <li>
                        <i class="fa-solid fa-ruler-combined"></i>
                        <p>{{ $propertyDetails->surface }} m<sup>2</sup></p>
                    </li>
                    @if ($propertyDetails->getTypeBien->intitule_type != 'terrain')
                        <li>
                            <i class="fa-solid fa-puzzle-piece"></i>
                            <p>{{ $propertyDetails->nb_pieces }} pièces</p>
                        </li>
                    @endif
                    @if ($propertyDetails->getTypeBien->intitule_type != 'terrain')
                        <li>
                            <i class="fa-solid fa-bed"></i>
                            <p>{{ $propertyDetails->nb_chambres }} chambre(s)</p>
                        </li>
                    @endif
                    @if ($propertyDetails->getTypeBien->intitule_type != 'terrain')
                        <li>
                            <i class="fa-solid fa-bath"></i>
                            <p>{{ $propertyDetails->nb_sdb }} salle(s) de bain</p>
                        </li>
                    @endif
                    @if ($propertyDetails->garage == 1 && $propertyDetails->getTypeBien->intitule_type != 'terrain')
                    <li>
                        <i class="fa-solid fa-warehouse"></i>
                        <p>Avec garage</p>
                    </li>
                    @endif
                    @if ($propertyDetails->terrain == 1 && $propertyDetails->getTypeBien->intitule_type != 'terrain')
                        <li>
                            <i class="fa-solid fa-leaf"></i>
                            <p>Avec terrain</p>
                        </li>
                    @endif
                    @if ($propertyDetails->neuf == 1 && $propertyDetails->getTypeBien->intitule_type != 'terrain')
                        <li>
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                            <p>Neuf</p>
                        </li>
                    @endif
                </ul>
            </section>

            <section class="property-description">
                <div class="left">
                    <p>{{ $propertyDetails->contenu_annonce }}</p>
                    <div>
                        <h2 class="text-center">Intéréssé ? Laissez-nous vos coordonnées</h2>
                        <div class="contact-form">
                            <form action="{{ route('send-contact-request') }}" id="contact-form" method="POST">
                                @csrf
                                <div>
                                    <label for="contact-firstname">Prénom <span class="required-indicator">*</span></label>
                                    <input type="text" id="contact-firstname" name="contact-firstname" @if (isset($user)) value="{{  $user['prenom'] }}" @endif required>
                                    <span class="text-danger" id="error-contact-firstname"></span>
                                </div>

                                <div>
                                    <label for="contact-lastname">Nom de famille<span class="required-indicator">*</span></label>
                                    <input type="text" id="contact-lastname" name="contact-lastname" @if (isset($user)) value="{{ $user['nom'] }}" @endif required>
                                    <span class="text-danger" id="error-contact-lastname"></span>
                                </div>

                                <div>
                                    <label for="contact-mail">Email <span class="required-indicator">*</span></label>
                                    <input type="email" id="contact-mail" name="contact-mail" @if (isset($user)) value="{{ $user['email'] }}" @endif  required>
                                    <span class="text-danger" id="error-contact-mail"></span>
                                </div>

                                <div>
                                    <label for="contact-phonenum">Numéro de téléphone <span class="required-indicator">*</span></label>
                                    <input type="tel" id="contact-phonenum" name="contact-phonenum" @if (isset($user)) value="{{ $user['telephone'] }}" @endif required>
                                    <span class="text-danger" id="error-contact-phonenum"></span>
                                </div>

                                <div>
                                    <label for="contact-message">Message</label>
                                    <textarea id="contact-message" name="contact-message" rows="7"></textarea>
                                    <span class="text-danger" id="error-contact-message"></span>
                                </div>

                                <input type="hidden" name="id_bienImmo" value="{{ $propertyDetails->id_bienImmo }}">

                                <button type="submit" value="submit-contact" class="a-button h-bg-primary h-color-white">Envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <h2>Localisation du bien</h2>
                    <div id="property-map" class="property-map"></div>
                </div>
            </section>
            <div class="text-center">
                <a href="{{ route('listing-property') }}" class="a-link">Retour à la liste de biens</a>
            </div>
        </div>
    </main>


    <!-- Script for display the property's map -->
    <script>
        "use strict";

        function initMap() {
            const geocoder = new google.maps.Geocoder();
            const address = "{{ $propertyDetails->adresse }}, {{ $propertyDetails->ville }}";

            geocoder.geocode({ address: address }, function(results, status) {
                if (status === 'OK') {
                    const map = new google.maps.Map(document.getElementById('property-map'), {
                        zoom: 15,
                        center: results[0].geometry.location
                    });

                    new google.maps.Marker({
                        position: results[0].geometry.location,
                        map: map
                    });
                } else {
                    alert('La géolocation du bien n\'a pas fonctionné pour la raison suivante : ' + status);
                }
            });
        }

        document.addEventListener("DOMContentLoaded", function() {
            if (typeof initMap === 'function') {
                initMap();
            }
        });

        window.initMap = initMap;
    </script>

    <!-- Call to Google Maps' API -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.api_key') }}"></script>
@endsection
