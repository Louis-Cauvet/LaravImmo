@php
    // "session_start()" activated in the controller

    $user = $_SESSION['user'];
@endphp


@extends('base')

@section('title')
    Compte de {{ $user['prenom'] }} {{ $user['nom'] }}
@endsection

@section('content')
    <main>
        <div class="inner-page user-account-page">
            <h1 class="h-color-dark-primary">Bonjour {{ $user['prenom'] }} {{ $user['nom'] }} !</h1>
            <section>
                <h2>Mes notifications</h2>
                <div class="favorites-container horizontal">
                    @for ($i = 1; $i <= 7; $i++)
                        <div class="notification">
                            <p class="notification-title">Nouvel appartement disponible pour Lyon 3ème</p>
                            <p class="notification-date">12/05/2024</p>
                            <p class="notification-content">Un nouvel appartement correspondant à vos critères est disponible !! Vueillez suivre le lien suivant pour le consulter :https://hdhdydddhfdyc.com. C'est une super bonne nouvelle hahahhouhihouhhh.</p>
                            <button class="open-notification"><i class="fa fa-plus"></i></button>
                        </div>
                    @endfor
                </div>
            </section>

            <section>
                <h2>Mes favoris</h2>
                @if ($favorites->isEmpty())
                    <p>Vous n'avez aucun bien en favoris pour l'instant, n'hésitez pas à en ajouter un lorsque l'un de nos biens vous plaît !</p>
                @else
                    <div class="favorites-container horizontal">
                        @foreach ($favorites as $favorite)
                            <div class="favorite-card">
                                <a href="{{ route('detail-property', $favorite->id_bienImmo) }}" class="card-immo">
                                    <div class="img-container">
                                        <p class="favorite-date">{{ \Carbon\Carbon::parse($favorite->date_ajout)->format('d/m/Y') }}</p>
                                        <img src="{{ asset('storage/' . $favorite->getBienImmo->getImages->first()->image_path) }}" alt="{{ $favorite->titre_annonce }}">
                                        <span class="filter-img"></span>
                                        <p class="price-property">{{ number_format($favorite->getBienImmo->prix, 0, ',', ' ') }} €</p>
                                    </div>
                                    <p class="title-property">{{ $favorite->getBienImmo->titre_annonce }}</p>
                                    <p class="city-property"><i class="fas fa-map-marker-alt"></i>{{ $favorite->getBienImmo->ville }}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif
            </section>

            <section class="user-researches">
                <h2>Mes recherches sauvegardées</h2>
                @if ($researches->isEmpty())
                    <p>Vous n'avez aucune recherche enregistrée, n'hésitez pas à le faire pour retrouver ici plus facilement vos recherches préférées !</p>
                @else
                    <div class="favorites-container horizontal">
                        @foreach ($researches as $research)
                            <a  href="{{ route('retake-search', ['id' => $research->id_recherche]) }}" title="Reprendre cette recherche" class="search-card">
                                <ul class="register-research">
                                    <li>
                                        <i class="fa-solid fa-handshake"></i>
                                        <p>{{ $research->achat ? 'A acheter' : 'A louer' }}</p>
                                    </li>

                                    @if($research->getTypeBien->intitule_type == 'maison')
                                        <li>
                                            <i class="fa-solid fa-home"></i>
                                            <p>Maison</p>
                                        </li>
                                    @elseif($research->getTypeBien->intitule_type == 'appartement')
                                        <li>
                                            <i class="fa-solid fa-building"></i>
                                            <p>Appartement</p>
                                        </li>
                                    @elseif($research->getTypeBien->intitule_type == 'terrain')
                                        <li>
                                            <i class="fa-solid fa-leaf"></i>
                                            <p>Terrain</p>
                                        </li>
                                    @endif

                                    @if($research->mots_cles)
                                        <li>
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                            <p>{{ $research->mots_cles }}</p>
                                        </li>
                                    @endif

                                    @if($research->ville)
                                        <li>
                                            <i class="fa-solid fa-location-dot"></i>
                                            <p>{{ $research->ville }}</p>
                                        </li>
                                    @endif

                                    @if($research->budget_max)
                                        <li>
                                            <i class="fa-solid fa-sack-dollar"></i>

                                            <p>{{ number_format($research->budget_max, 0, ',', ' ') . '€ max.' }}</p>
                                        </li>
                                    @endif

                                    <i class="delete-favorite fa-solid fa-xmark" title="Supprimer cette recherche"></i>
                                </ul>
                            </a>
                        @endforeach
                    </div>
                @endif
            </section>
            <section class="account-form">
                <h2 class="text-center">Mes informations</h2>
                <div class="contact-form">
                    <form action="#_" method="POST">
                        <div>
                            <label for="firstname">Prénom<span class="required-indicator">*</span></label>
                            <input type="text" id="firstname" name="firstname" value="{{ $user['prenom'] }}" required>
                        </div>

                        <div>
                            <label for="lastname">Nom de famille<span class="required-indicator">*</span></label>
                            <input type="text" id="lastname" name="lastname" value="{{ $user['nom'] }}" required>
                        </div>

                        <div>
                            <label for="phone">Numéro de téléphone<span class="required-indicator">*</span></label>
                            <input type="tel" id="phone" name="phone" value="{{ $user['telephone'] }}" required>
                        </div>

                        <div>
                            <label for="mail">Email<span class="required-indicator">*</span></label>
                            <input type="email" id="mail" name="mail" value="{{ $user['email'] }}"  required>
                        </div>

                        <div>
                            <label for="password">Mot de passe<span class="required-indicator">*</span></label>
                            <input type="password" id="password" name="password" value="{{ $user['mot_de_passe'] }}" required>
                        </div>

                        <div>
                            <button type="submit" value="submit-modify" class="a-button h-bg-primary h-color-white">Modifier mes informations</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>
@endsection

