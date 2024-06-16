@extends('base')

@section('title', 'Titre du bien')

@section('content')
    <main>
        <div class="inner-page property-presentation">
            <h1>Superbe appartement 5 pièces en plein centre ville</h1>
            <div class="presentation-header">
                <div>
                    <p class="h-color-secondary h-fz-22 h-fw-bold">150 000 €</p>
                    <p class="h-fz-18 h-color-primary">69003 Lyon</p>
                </div>
                <button class="a-button h-bg-primary" title="Ajouter aux favoris">
                    <i class="fa-solid fa-heart"></i>
                </button>
            </div>

            <section class="property-carrousel">
                <div class="carrousel-current-img">
                    <i class="slider-arrow arrow-left fa-solid fa-angle-left"></i>
                    <div class="slider">
                        @for ($i = 0; $i <= 3; $i++)
                            <article>
                                <div class="img-container">
                                    <img src="/resources/img/photo-annonce3.jpg" alt="texte alternatif">
                                </div>
                            </article>
                        @endfor
                    </div>
                    <i class="slider-arrow arrow-right fa-solid fa-angle-right"></i>
                </div>
                <ul class="slider-tags">
                    @for ($i = 0; $i <= 3; $i++)
                        <li data-position="{{$i}}" @if ($i == 0) class="active" @endif>
                            <div class="img-container">
                                <img src="/resources/img/photo-annonce3.jpg" alt="texte alternatif">
                                <i class="fa-solid fa-check"></i>
                            </div>
                        </li>
                    @endfor
                </ul>
            </section>

            <section class="property-criterias">
                <ul>
                    <li>
                        <i class="fa-solid fa-handshake"></i>
                        <p>A vendre</p>
                    </li>
                    <li>
                        <i class="fa-solid fa-building"></i>
                        <p>Appartement</p>
                    </li>
                    <li>
                        <i class="fa-solid fa-ruler-combined"></i>
                        <p>80m<sup>2</sup></p>
                    </li>
                    <li>
                        <i class="fa-solid fa-puzzle-piece"></i>
                        <p>5 pièces</p>
                    </li>
                    <li>
                        <i class="fa-solid fa-bed"></i>
                        <p>1 chambre</p>
                    </li>
                    <li>
                        <i class="fa-solid fa-bath"></i>
                        <p>2 salles de bains</p>
                    </li>
                    <li>
                        <i class="fa-solid fa-warehouse"></i>
                        <p>Garage</p>
                    </li>
                    <li>
                        <i class="fa-solid fa-leaf"></i>
                        <p>Terrain</p>
                    </li>
                    <li>
                        <i class="fa-solid fa-wand-magic-sparkles"></i>
                        <p>Neuf</p>
                    </li>
                </ul>
            </section>

            <section class="property-description">
                <div class="left">
                    <p>En poussant la porte de cet appartement, vous serez immédiatement séduit par son charme et son élégance.
                        Situé dans l'un des quartiers les plus recherchés de la ville, il bénéficie d'une situation idéale,
                        à proximité de toutes les commodités : commerces, écoles, transports en commun, et espaces verts.
                        <br><br>
                        Le salon, baigné de lumière naturelle, offre un espace de vie convivial et chaleureux, parfait
                        pour recevoir des amis ou passer des moments en famille. La cuisine, entièrement équipée avec des
                        appareils modernes, vous permettra de préparer de délicieux repas en toute simplicité.
                        <br><br>
                        Les trois chambres, toutes dotées de grands placards intégrés, offrent un espace de repos
                        confortable et serein. Les deux salles de bains, avec des finitions de qualité, ajoutent une
                        touche de luxe à cet appartement.
                        <br><br>
                        L'appartement est situé dans une résidence bien entretenue avec un jardin commun et un service
                        de conciergerie. Le quartier est vivant et dynamique, avec de nombreux cafés, restaurants et
                        boutiques à quelques pas. Les transports en commun à proximité facilitent l'accès au centre-ville
                        et aux principaux axes routiers.
                        <br><br>
                        Ne manquez pas cette opportunité unique d'acquérir un appartement de standing dans un cadre de
                        vie idéal. Pour plus d'informations ou pour organiser une visite, n'hésitez pas à nous contacter.
                    </p>
                    <div class="contact-form">
                        <h2 class="text-center">Intéréssé ? Laissez-nous vos coordonnées</h2>
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
