@php
    session_start();

    if (!isset($_SESSION['user'])) {
        $homeUrl = route('homepage');

        header('Location: ' . $homeUrl);
        exit();
    } else if ($_SESSION['user']['role'] != "Admin") {
         $homeUrl = route('homepage');

        header('Location: ' . $homeUrl);
        exit();
    } else {
      $user = $_SESSION['user'];
    }
@endphp


@extends('base')

@section('title')
    Compte admin de {{ $user['prenom'] }} {{ $user['nom'] }}
@endsection

@section('content')
    <main>
        <div class="inner-page admin-account-page">
            <h1 class="h-color-dark-primary">Compte administrateur de {{ $user['prenom'] }} {{ $user['nom'] }}</h1>
            <section>
                <h2>Nos demandes de contact</h2>
                @if ($contactRequests->isEmpty())
                    <p>Vous n'avez aucune demande de contact pour l'instant !</p>
                @else
                    <div class="favorites-container horizontal">
                        @foreach($contactRequests as $request)
                            <div class="notification">
                                <i class="delete-favorite delete-contact-request fa-solid fa-xmark" data-contact-request-id="{{ $request->id_demande }}" title="Supprimer cette demande"></i>
                                <p class="notification-title">{{ $request->prenom_demandeur }} {{ $request->nom_demandeur }}</p>
                                <p class="notification-date">{{ \Carbon\Carbon::parse($request->created_at)->format('d/m/Y') }}</p>
                                <div class="notification-content">
                                    <p><strong>Adresse mail : </strong>{{$request->mail_demandeur}}</p>
                                    <p><strong>Téléphone : </strong>{{$request->tel_demandeur}}</p>
                                    @if(isset($request->id_bienImmo))
                                        <p><strong>Bien concerné : </strong><a href="{{ route('detail-property', ['id' => $request->id_bienImmo]) }}">{{ $request->getBienImmo->titre_annonce }}</a></p>
                                    @endif
                                    @if(isset($request->contenu_demande))
                                        <br>
                                        {{ $request->contenu_demande }}
                                    @endif
                                </div>
                                <button class="open-notification"><i class="fa fa-plus"></i></button>
                            </div>
                        @endforeach
                    </div>
                @endif
            </section>

            <section>
                <h2>Nos biens</h2>
                <div class="favorites-container horizontal">
                    @for ($i = 1; $i <= 7; $i++)
                        <div class="favorite-card">
                            <a href="#_" class="card-immo hidden-to-clients">
                                <div class="img-container">
                                    <img src="/resources/img/photo-annonce1.jpg" alt="texte alternatif">
                                    <span class="filter-img"></span>
                                    <p class="price-property">115 500 €</p>
                                    <i class="hidden-property fas fa-eye-slash"></i>
                                </div>
                                <p class="title-property">Appartement 5 pièces</p>
                                <p class="city-property"><i class="fas fa-map-marker-alt"></i>Dijon</p>
                            </a>
                            <div class="admin-actions">
                                <a href="#_" class="a-button h-bg-primary h-color-white">Modifier</a>
                                <button class="a-button h-bg-primary h-color-white">Masquer</button>
                                <button class="a-button h-bg-primary h-color-white">Supprimer</button>
                                <button class="show-interested-clients a-button h-bg-primary h-color-white">Consulter les clients intéréssés</button>
                            </div>
                            <div class="interested-clients">
                                <p><strong>10 clients intéressés :</strong></p>
                                <ul>
                                    @for ($j = 1; $j <= 10; $j++)
                                    <li>
                                        <a href="#_id">Jean Pierre Mader</a>
                                    </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                    @endfor
                </div>
            </section>

            <section class="profiles-clients">
                <h2>Nos clients</h2>
                <div class="favorites-container horizontal">
                    @for ($i = 1; $i <= 7; $i++)
                        <div class="user-profile">
                            <ul id="id_user">
                                <li>
                                    <i class="fa-solid fa-user"></i>
                                    <p>Louis Cauvet</p>
                                </li>
                                <li>
                                    <i class="fa-solid fa-at"></i>
                                    <p>louiscauvet8@gmail.com</p>
                                </li>
                                <li>
                                    <i class="fa-solid fa-phone"></i>
                                    <p>0782756984</p>
                                </li>
                            </ul>
                            <div class="write-notif-area">
                                <button class="write-notification-client a-button h-bg-primary h-color-white">Rédiger une notification personnelle</button>
                                <div>
                                    <textarea rows="8"></textarea>
                                    <button class="send-notification-client a-button h-bg-primary h-color-white">Envoyer la notification</button>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </section>
            <section class="account-form">
                <h2 class="text-center">Mes informations</h2>
                <div class="contact-form">
                    <form id="update-user-form" action="{{ route('update-user') }}" method="POST">
                        @csrf
                        <div>
                            <label for="update-firstname">Prénom<span class="required-indicator">*</span></label>
                            <input type="text" id="update-firstname" name="update-firstname" value="{{ $user['prenom'] }}" required>
                            <span class="text-danger" id="error-update-firstname"></span>
                        </div>

                        <div>
                            <label for="update-lastname">Nom de famille<span class="required-indicator">*</span></label>
                            <input type="text" id="update-lastname" name="update-lastname" value="{{ $user['nom'] }}" required>
                            <span class="text-danger" id="error-update-lastname"></span>
                        </div>

                        <div>
                            <label for="update-phone">Numéro de téléphone<span class="required-indicator">*</span></label>
                            <input type="tel" id="update-phone" name="update-phone" value="{{ $user['telephone'] }}" required>
                            <span class="text-danger" id="error-update-phone"></span>
                        </div>

                        <div>
                            <label for="update-mail">Email<span class="required-indicator">*</span></label>
                            <input type="email" id="update-mail" name="update-mail" value="{{ $user['email'] }}" required>
                            <span class="text-danger" id="error-update-mail"></span>
                        </div>

                        <div>
                            <label for="update-password">Mot de passe<span class="required-indicator">*</span></label>
                            <input type="password" id="update-password" name="update-password" value="{{ $user['mot_de_passe'] }}" required>
                            <span class="text-danger" id="error-update-password"></span>
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
