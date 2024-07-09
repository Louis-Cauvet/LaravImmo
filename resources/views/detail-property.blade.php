@php
    session_start();
@endphp

@extends('base')

@section('title', 'Titre du bien')

@section('content')
    <main>
        <div class="inner-page property-presentation">
            <h1>{{ $propertyDetails->titre_annonce }}</h1>
            <div class="presentation-header">
                <div>
                    <p class="h-color-secondary h-fz-22 h-fw-bold">{{ number_format($propertyDetails->prix, 2, ',', ' ') }} €</p>
                    <p class="h-fz-18 h-color-primary">{{ $propertyDetails->code_postal }} {{ $propertyDetails->ville }}</p>
                </div>
                <button class="a-button h-bg-primary" title="Ajouter aux favoris">
                    <i class="fa-solid fa-heart"></i>
                </button>
            </div>

            <section class="property-carrousel">
                <div class="carrousel-current-img">
                    <i class="slider-arrow arrow-left fa-solid fa-angle-left"></i>
                    <div class="slider">
                        @foreach ($propertyDetails->images as $index => $image)
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
                    @foreach ($propertyDetails->images as $index => $image)
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
                        <i class="fa-solid fa-building"></i>
                        <p>{{ $propertyDetails->typeBien->nom }}</p>
                    </li>
                    <li>
                        <i class="fa-solid fa-ruler-combined"></i>
                        <p>{{ $propertyDetails->surface }} m<sup>2</sup></p>
                    </li>
                    <li>
                        <i class="fa-solid fa-puzzle-piece"></i>
                        <p>{{ $propertyDetails->nb_pieces }} pièces</p>
                    </li>
                    <li>
                        <i class="fa-solid fa-bed"></i>
                        <p>{{ $propertyDetails->nb_chambres }} chambre(s)</p>
                    </li>
                    <li>
                        <i class="fa-solid fa-bath"></i>
                        <p>{{ $propertyDetails->nb_sdb }} salle(s) de bain</p>
                    </li>
                    <li>
                        <i class="fa-solid fa-warehouse"></i>
                        <p>{{ $propertyDetails->garage ? 'Garage' : 'Pas de garage' }}</p>
                    </li>
                    <li>
                        <i class="fa-solid fa-leaf"></i>
                        <p>{{ $propertyDetails->terrain ? 'Terrain' : 'Pas de terrain' }}</p>
                    </li>
                    <li>
                        <i class="fa-solid fa-wand-magic-sparkles"></i>
                        <p>{{ $propertyDetails->neuf ? 'Neuf' : 'Ancien' }}</p>
                    </li>
                </ul>
            </section>

            <section class="property-description">
                <div class="left">
                    <p>{{ $propertyDetails->contenu_annonce }}</p>
                    <div>
                        <h2 class="text-center">Intéréssé ? Laissez-nous vos coordonnées</h2>
                        <div class="contact-form">
                            <form action="#_" method="POST">
                                <div>
                                    <label for="lastname">Nom <span class="required-indicator">*</span></label>
                                    <input type="text" id="lastname" name="lastname"  required>
                                </div>

                                <div>
                                    <label for="lastname">Prénom <span class="required-indicator">*</span></label>
                                    <input type="text" id="firstname" name="firstname" required>
                                </div>

                                <div>
                                    <label for="mail">Email <span class="required-indicator">*</span></label>
                                    <input type="email" id="mail" name="mail" required>
                                </div>

                                <div>
                                    <label for="phonenum">Numéro de téléphone <span class="required-indicator">*</span></label>
                                    <input type="tel" id="phonenum" name="phonenum" required>
                                </div>

                                <button type="submit" value="submit-search" class="a-button h-bg-primary h-color-white">Envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <h2>Localisation du bien</h2>
                    <div class="property-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.7033194786063!2d4.845115975776697!3d45.75709341384933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea5db0cd7601%3A0x93b6e1cf49ab2e44!2s24%20Rue%20Edison%2C%2069003%20Lyon!5e0!3m2!1sfr!2sfr!4v1717349154790!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </section>
            <div class="text-center">
                <a href="{{ route('listing-property') }}" class="a-link">Retour à la liste de biens</a>
            </div>
        </div>
    </main>
@endsection
