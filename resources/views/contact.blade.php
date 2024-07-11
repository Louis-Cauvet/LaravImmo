@php
    session_start();

    if (isset($_SESSION['user'])) {
      $user = $_SESSION['user'];
    }
@endphp

@extends('base')

@section('title', 'Nous contacter')

@section('content')
    <main>
        <div class="inner-page contact-page">
            <h1>Une question, un besoin, une remarque ?</h1>
            <p>Que vous soyez à la recherche de la maison de vos rêves, d’un investissement rentable, ou que vous
                souhaitiez vendre votre bien dans les meilleures conditions, notre équipe dévouée est là pour vous
                accompagner à chaque étape. Avec une expertise locale et une connaissance approfondie du marché, nous
                offrons un service personnalisé pour répondre à toutes vos attentes. N’hésitez pas à nous contacter via
                le formulaire ci-dessous, par téléphone, ou en visitant notre agence. Nous sommes impatients de vous
                aider à réaliser vos ambitions immobilières.
            </p>
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

                    <div>
                        <button type="submit" value="submit-contact" class="a-button h-bg-primary h-color-white">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
