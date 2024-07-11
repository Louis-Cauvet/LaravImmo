@php
    session_start();
@endphp

@extends('base')

@section('title', 'Nos biens correspondant à vos envies')

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
            @if ($properties->isEmpty())
                <p>Aucun de nos biens immobiliers ne correspond à vos critères de recherche... Essayez avec d'autres critères ou alors retentez votre chance plus tard !</p>
            @else
                <div class="cards-container news-cards">
                    @foreach ($properties as $property)
                        <a href="{{ route('detail-property', $property->id_bienImmo) }}" class="card-immo">
                            <div class="img-container">
                                <img src="{{ asset('storage/' . $property->getImages->first()->image_path) }}" alt="{{ $property->titre_annonce }}">
                                <span class="filter-img"></span>
                                <p class="price-property">{{ number_format($property->prix, 0, ',', ' ') }} €</p>
                            </div>
                            <p class="title-property">{{ $property->titre_annonce }}</p>
                            <p class="city-property"><i class="fas fa-map-marker-alt"></i>{{ $property->ville }}</p>
                            <div class="criterias-property">
                                <div>
                                    <i class="fas fa-bed"></i>
                                    <p><strong>{{ $property->nombre_chambres }}</strong> chambre(s)</p>
                                </div>
                                <div>
                                    <i class="fas fa-bath"></i>
                                    <p><strong>{{ $property->nombre_salles_de_bain }}</strong> salle(s) de bain</p>
                                </div>
                                <div>
                                    <i class="fas fa-ruler-combined"></i>
                                    <p><strong>{{ $property->surface }}</strong> m2</p>
                                </div>
                            </div>
                            <button class="a-button h-bg-primary h-color-white">Découvrir ce bien</button>
                        </a>
                    @endforeach
                </div>
                <div class="pagination text-center">
                    <button class="a-button h-color-dark-primary">Voir plus de biens</button>
                </div>
            @endif
        </div>
    </main>
@endsection
