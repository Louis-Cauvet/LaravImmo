@extends('base')

@section('title', 'Page d\'accueil')

@section('content')
    <main>
        @include('components/searchbar')

        <div class="inner-page">
            <section class="container-news">
                <h2>Nouveautés</h2>
                <div class="cards-container news-cards">
                    <a href="#_" class="card-immo">
                        <div class="img-container">
                            <img src="/resources/img/photo-annonce1.jpg" alt="texte alternatif">
                            <span class="filter-img"></span>
                            <p class="price-property">115 500 €</p>
                        </div>
                        <p class="title-property">Appartement 5 pièces</p>
                        <p class="city-property"><i class="fas fa-map-marker-alt"></i>Dijon</p>
                        <div class="criterias-property">
                            <div>
                                <i class="fas fa-bed"></i>
                                <p><strong>3</strong> chambre(s)</p>
                            </div>
                            <div>
                                <i class="fas fa-bath"></i>
                                <p><strong>2</strong> salle(s) de bain</p>
                            </div>
                            <div>
                                <i class="fas fa-ruler-combined"></i>
                                <p><strong>82</strong> m2</p>
                            </div>
                        </div>
                        <button class="a-button h-bg-primary h-color-white">Découvrir ce bien</button>
                    </a>
                    <a href="#_" class="card-immo">
                        <div class="img-container">
                            <img src="/resources/img/photo-annonce2.jpg" alt="texte alternatif">
                            <span class="filter-img"></span>
                            <p class="price-property">130 000 €</p>
                        </div>
                        <p class="title-property">Appartement 2 pièces</p>
                        <p class="city-property"><i class="fas fa-map-marker-alt"></i>Lyon</p>
                        <div class="criterias-property">
                            <div>
                                <i class="fas fa-bed"></i>
                                <p><strong>1</strong> chambre(s)</p>
                            </div>
                            <div>
                                <i class="fas fa-bath"></i>
                                <p><strong>1</strong> salle(s) de bain</p>
                            </div>
                            <div>
                                <i class="fas fa-ruler-combined"></i>
                                <p><strong>36</strong> m2</p>
                            </div>
                        </div>
                        <button class="a-button h-bg-primary h-color-white">Découvrir ce bien</button>
                    </a>
                    <a href="#_" class="card-immo">
                        <div class="img-container">
                            <img src="/resources/img/photo-annonce3.jpg" alt="texte alternatif">
                            <span class="filter-img"></span>
                            <p class="price-property">175 500 €</p>
                        </div>
                        <p class="title-property">Maison neuve à proximité de la mer</p>
                        <p class="city-property"><i class="fas fa-map-marker-alt"></i>Toulouse</p>
                        <div class="criterias-property">
                            <div>
                                <i class="fas fa-bed"></i>
                                <p><strong>3</strong> chambres</p>
                            </div>
                            <div>
                                <i class="fas fa-bath"></i>
                                <p><strong>1</strong> salle(s) de bain</p>
                            </div>
                            <div>
                                <i class="fas fa-ruler-combined"></i>
                                <p><strong>140</strong> m2</p>
                            </div>
                        </div>
                        <button class="a-button h-bg-primary h-color-white">Découvrir ce bien</button>
                    </a>
                </div>
                <div class="text-center">
                    <a href="{{ route('listing-property') }}" class="a-link">Découvrir tous nos biens</a>
                </div>
            </section>

            <section class="container-agency">
                <div class="double-container">
                    <div class="img-container rounded">
                        <img src="/resources/img/laravimmo-illustration.png" alt="texte alternatif">
                    </div>
                    <div>
                        <h1>Larav'Immo, votre partenaire de confiance</h1>
                        <p>Forts d'une expertise locale et d'une passion pour l'immobilier, nous vous accompagnons dans l'achat,
                            la vente et la location de biens d'exception. Chez Larav'Immo, chaque client est unique et mérite
                            un service personnalisé et de qualité.
                            <br>Notre équipe dédiée met tout en œuvre pour trouver le bien
                            qui correspond parfaitement à vos besoins et à vos aspirations. Faites confiance à Larav'Immo,
                            là où vos rêves d'habitat deviennent réalité.</p>
                        <p>L'agence intervient sur tout le territoire pour : </p>
                        <ul>
                            <li>- la commercialisation des biens mis en vente par les offices</li>
                            <li>- la réalisation d'études d'aménagement et de stratégie immobilière</li>
                            <li>- le conseil et suivi en performance énergétique</li>
                        </ul>
                        <a href="#_" class="a-link">Découvrir l'agence</a>
                    </div>
                </div>
                <div class="listing-expertises">
                    <div class="expertise">
                        <i class="expertise-icon fa-solid fa-compass-drafting"></i>
                        <h3>Etudes et conseil en aménagement</h3>
                    </div>
                    <div class="expertise">
                        <i class="expertise-icon fa-solid fa-shop-lock"></i>
                        <h3>Accession à la propriété</h3>
                    </div>
                    <div class="expertise">
                        <i class="expertise-icon fa-solid fa-plug-circle-check"></i>
                        <h3>Conseil en performance énergétique</h3>
                    </div>
                </div>
            </section>

            <section class="container-testimony">
                <h2>Nos clients parlent de nous</h2>
                <i class="slider-arrow arrow-left fa-solid fa-angle-left"></i>
                <div class="slider">
                    <article>
                        <p>"Larav'Immo a rendu le processus de vente de notre maison incroyablement simple et sans stress.
                            Leur équipe de professionnels a pris en charge chaque détail, de la mise en marché à la finalisation de la vente.
                            Leur expertise et leur dévouement sont remarquables. Nous sommes très reconnaissants pour leur aide précieuse."</p>
                        <p><span class="identity-testimony">Caroline Ferra</span>, janvier 2024</p>
                    </article>
                    <article>
                        <p>"Nous avons acheté notre première maison grâce à Larav'Immo, et leur implication
                            comme leur professionalisme ont grandement simplifié les démarches.
                            Ils ont été patients et ont répondu à toutes nos questions, ce qui nous a vraiment mis en confiance.
                            Merci à toute l'équipe de Larav'Immo pour avoir fait de ce rêve une réalité !"</p>
                        <p><span class="identity-testimony">Roger Bachut</span>, mars 2024</p>
                    </article>
                    <article>
                        <p>"J'ai eu l'occasion de travailler avec plusieurs agences immobilières par le passé,
                            mais Larav'Immo se distingue vraiment par son professionnalisme et son engagement envers ses clients.
                            Dès le premier contact, j'ai été impressionné par leur écoute et leur capacité à comprendre mes besoins spécifiques.
                            Ils ont su me proposer des biens parfaitement en adéquation avec mes attentes."</p>
                        <p><span class="identity-testimony">Gabriel Moreau</span>, avril 2024</p>
                    </article>
                </div>
                <i class="slider-arrow arrow-right fa-solid fa-angle-right"></i>
            </section>
        </div>
    </main>
@endsection
