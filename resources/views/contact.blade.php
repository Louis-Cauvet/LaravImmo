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
                <form action="#_" method="POST">
                    <div>
                        <label for="lastname">Nom<span class="required-indicator">*</span></label>
                        <input type="text" id="lastname" name="lastname"  required>
                    </div>

                    <div>
                        <label for="lastname">Prénom<span class="required-indicator">*</span></label>
                        <input type="text" id="firstname" name="firstname" required>
                    </div>

                    <div>
                        <label for="mail">Email<span class="required-indicator">*</span></label>
                        <input type="email" id="mail" name="mail" required>
                    </div>

                    <div>
                        <label for="phonenum">Numéro de téléphone<span class="required-indicator">*</span></label>
                        <input type="tel" id="phonenum" name="phonenum" required>
                    </div>

                    <div>
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="7"></textarea>
                    </div>

                    <div>
                        <button type="submit" value="submit-search" class="a-button h-bg-primary h-color-white">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
