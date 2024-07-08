@php
    session_start();

    if (!isset($_SESSION['user'])) {
        $homeUrl = route('homepage');

        header('Location: ' . $homeUrl);
        exit();
    } else {
      $user = $_SESSION['user'];
    }

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
                <div class="favorites-container horizontal">
                    @for ($i = 1; $i <= 7; $i++)
                    <div class="favorite-card">
                        <a href="#_" class="card-immo">
                            <div class="img-container">
                                <p class="favorite-date">02/05/2024</p>
                                <img src="/resources/img/photo-annonce1.jpg" alt="texte alternatif">
                                <span class="filter-img"></span>
                                <p class="price-property">115 500 €</p>
                            </div>
                            <p class="title-property">Appartement 5 pièces</p>
                            <p class="city-property"><i class="fas fa-map-marker-alt"></i>Dijon</p>
                        </a>
                    </div>
                    @endfor
                </div>
            </section>

            <section class="user-researches">
                <h2>Mes recherches sauvegardées</h2>
                <div class="favorites-container horizontal">
                    @for ($i = 1; $i <= 7; $i++)
                        <a href="#_" title="Reprendre cette recherche">
                            <ul class="register-research">
                                <li>
                                    <i class="fa-solid fa-handshake"></i>
                                    <p>A louer</p>
                                </li>
                                <li>
                                    <i class="fa-solid fa-building"></i>
                                    <p>Maison</p>
                                </li>
                                <li>
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                    <p>Bon état - soleil</p>
                                </li>
                                <li>
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p>Dijon</p>
                                </li><li>
                                    <i class="fa-solid fa-sack-dollar"></i>
                                    <p>350 000€ max.</p>
                                </li>
                                <i class="delete-favorite fa-solid fa-xmark" title="Supprimer cette recherche"></i>
                            </ul>
                        </a>
                    @endfor
                </div>
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

