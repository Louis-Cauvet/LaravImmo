@extends('base')

@section('title', 'Notre liste de biens')

@section('content')
    <main>
        @include('components/searchbar')

        <div class="inner-page">
            <div class="title-save">
                <h1>Nos biens correspondant à vos envies</h1>
                <button href="#" class="a-button h-bg-primary h-color-white">
                    <i class="fa-solid fa-floppy-disk"></i>Enregistrer la recherche
                </button>
            </div>
            <div class="cards-container news-cards">
                @for ($i = 1; $i <= 9; $i++)
                    <a href="{{ route('detail-property') }}" class="card-immo">
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
                @endfor
            </div>
            <div class="pagination text-center">
                <button class="a-button h-color-dark-primary">Voir plus de biens</button>
            </div>
        </div>
    </main>
@endsection
