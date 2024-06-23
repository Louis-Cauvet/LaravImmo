@extends('base')

@section('title', 'Compte admin de nom prenom')

@section('content')
    <main>
        <div class="inner-page admin-account-page">
            <h1 class="h-color-dark-primary">Compte administrateur de "Nom", "Prénom" !</h1>
            <section>
                <h2>Nos demandes de contact</h2>
                <div class="favorites-container horizontal">
                    @for ($i = 1; $i <= 7; $i++)
                        <div class="notification">
                            <i class="delete-favorite fa-solid fa-xmark" title="Supprimer cette demande"></i>
                            <p class="notification-title">René Girard</p>
                            <p class="notification-date">12/05/2024</p>
                            <div class="notification-content">
                                <p><strong>Adresse mail : </strong>r.girard@gmail.com</p>
                                <p><strong>Téléphone : </strong>0785794825</p>
                                <p><strong>Bien concerné : </strong><a href="#">Appartement 5 pièces</a></p>
                                <br>
                                Bonjour, je souhaiterais connaitre les horaires d'ouverture de l'agence svp, j'ai
                                l'impression qu'elle est fermée depuis plusieurs jours, est-ce normal ?
                            </div>
                            <button class="open-notification"><i class="fa fa-plus"></i></button>
                        </div>
                    @endfor
                </div>
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
                    <form action="#_" method="POST">
                        <div>
                            <label for="firstname">Prénom<span class="required-indicator">*</span></label>
                            <input type="text" id="firstname" name="firstname" required>
                        </div>

                        <div>
                            <label for="lastname">Nom de famille<span class="required-indicator">*</span></label>
                            <input type="text" id="lastname" name="lastname" required>
                        </div>

                        <div>
                            <label for="phone">Numéro de téléphone<span class="required-indicator">*</span></label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>

                        <div>
                            <label for="mail">Email<span class="required-indicator">*</span></label>
                            <input type="email" id="mail" name="mail" required>
                        </div>

                        <div>
                            <label for="password">Mot de passe<span class="required-indicator">*</span></label>
                            <input type="password" id="password" name="password" required>
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
