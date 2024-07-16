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
                @if ($biens->isEmpty())
                    <p>Vous n'avez aucun bien dans la base de données pour l'instant</p>
                @else
                    <div class="favorites-container horizontal">
                        @foreach($biens as $bien)
                            <div class="favorite-card">
                                <a href="{{ route('detail-property', $bien->id_bienImmo) }}" class="card-immo @if($bien->disponible == 0) hidden-to-clients @endif">
                                    <div class="img-container">
                                        <img src="{{ asset('storage/' . $bien->getImages->first()->image_path) }}" alt="texte alternatif">
                                        <span class="filter-img"></span>
                                        <p class="price-property">{{ number_format($bien->prix, 0, ',', ' ') }} €</p>
                                        <i class="hidden-property fas fa-eye-slash"></i>
                                    </div>
                                    <p class="title-property">{{ $bien->titre_annonce }}</p>
                                    <p class="city-property"><i class="fas fa-map-marker-alt"></i>{{ $bien->ville }}</p>
                                </a>
                                <div class="admin-actions">
                                    <button class="a-button visibility-button h-bg-primary h-color-white" data-id="{{ $bien->id_bienImmo }}">@if($bien->disponible == 0) Rendre visible @else Masquer @endif</button>
                                    <button class="a-button delete-property-button h-bg-primary h-color-white" data-id="{{ $bien->id_bienImmo }}">Supprimer</button>
                                    <button class="show-interested-clients a-button h-bg-primary h-color-white">Consulter les clients intéréssés</button>
                                </div>
                                <div class="interested-clients">
                                    @if ($bien->getClientsInteressés->count() == 0)
                                        <p>Aucun client n'a mis ce bien en favoris pour l'instant...</p>
                                    @else
                                        <p><strong>{{ $bien->getClientsInteressés()->count() }} clients intéressés :</strong></p>
                                        <ul>
                                            @foreach ($bien->getClientsInteressés as $client)
                                                <li>
                                                    <a href="#user-{{ $client->id_client }}">{{ $client->prenom }} {{ $client->nom }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </section>

            <section class="profiles-clients">
                <h2>Nos clients</h2>
                @if ($clients->isEmpty())
                    <p>Aucun client n'a crée de compte pour l'instant !</p>
                @else
                    <div class="favorites-container horizontal">
                        @foreach($clients as $client)
                            <div id="user-{{ $client->id_client }}" class="user-profile">
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-user"></i>
                                        <p>{{ $client->prenom }} {{ $client->nom }}</p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-at"></i>
                                        <p>{{ $client->email }}</p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-phone"></i>
                                        <p>{{ $client->telephone }}</p>
                                    </li>
                                </ul>
                                <div class="write-notif-area">
                                    <button class="write-notification-client a-button h-bg-primary h-color-white">Rédiger une notification personnelle</button>
                                    <form class="send-notification-client">
                                        @csrf
                                        <input type="hidden" name="id_client" value="{{ $client->id_client }}">

                                        <input type="text" name="titre_notif" placeholder="Titre" required>
                                        <span class="text-danger" id="error-titre_notif"></span>

                                        <textarea rows="8" name="contenu_notif" placeholder="Message" required></textarea>
                                        <span class="text-danger" id="error-contenu_notif"></span>

                                        <button type="submit" class="send-notification-client a-button h-bg-primary h-color-white">Envoyer la notification</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
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
