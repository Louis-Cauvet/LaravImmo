@extends('base')

@section('title', 'Vendre son bien')

@section('content')
    <main>
        <div class="inner-page sale-page">
            <h1>Vous envisagez de vendre votre bien ?</h1>
            <p> En quelques étapes, vous pouvez nous fournir les informations essentielles sur votre propriété,
                et notre équipe d'experts se chargera du reste. Nous mettons tout en œuvre pour garantir une évaluation
                précise, une mise en marché efficace, et un accompagnement personnalisé tout au long du processus de vente.
            </p>
            <div class="contact-form">
                <form action="#_" method="POST">
                    <div class="radio-inputs">
                        <div>
                            <input type="radio" id="radio-sale" name="property-status" value="A vendre" checked>
                            <label for="radio-sale">A vendre</label>
                        </div>
                        <div>
                            <input type="radio" id="radio-rental" name="property-status" value="A louer">
                            <label for="radio-rental">A louer</label>
                        </div>
                    </div>

                    <div>
                        <select name="property-type" id="property-type" required>
                            <option value="maison">Maison</option>
                            <option value="appartement">Appartement</option>
                            <option value="terrain">Terrain</option>
                        </select>
                    </div>

                    <div>
                        <label for="title">Titre de votre bien <span class="required-indicator">*</span></label>
                        <input type="text" id="title" name="title" required>
                    </div>

                    <div>
                        <label for="price">Prix (ou loyer si location)<span class="required-indicator">*</span></label>
                        <input type="number" id="price" name="price" required>
                    </div>

                    <div>
                        <label for="description">Description<span class="required-indicator">*</span></label>
                        <textarea id="description" name="description" rows="10" required></textarea>
                    </div>

                    <div>
                        <label for="adress">Adresse<span class="required-indicator">*</span></label>
                        <input type="text" id="adress" name="adress" required>
                    </div>

                    <div>
                        <label for="city">Ville<span class="required-indicator">*</span></label>
                        <input type="text" id="city" name="city" required>
                    </div>

                    <div>
                        <label for="postal">Code postal<span class="required-indicator">*</span></label>
                        <input type="text" id="postal" name="postal" required>
                    </div>

                    <div>
                        <label for="postal">Surface (en m<sup>2</sup>)<span class="required-indicator">*</span></label>
                        <input type="number" id="postal" name="postal" required>
                    </div>

                    <div>
                        <label for="nb_rooms">Nombre de pièces<span class="required-indicator">*</span></label>
                        <input type="number" id="nb_rooms" name="nb_rooms" required>
                    </div>

                    <div>
                        <label for="nb_bedrooms">Nombre de chambres<span class="required-indicator">*</span></label>
                        <input type="number" id="nb_bedrooms" name="nb_bedrooms" required>
                    </div>

                    <div>
                        <label for="nb_bathrooms">Nombre de salles de bains<span class="required-indicator">*</span></label>
                        <input type="number" id="nb_bathrooms" name="nb_bathrooms" required>
                    </div>

                    <div>
                        <div>
                            <label for="has_garage">Garage</label>
                            <input type="checkbox" id="has_garage" name="has_garage">
                        </div>

                        <div>
                            <label for="has_land">Terrain</label>
                            <input type="checkbox" id="has_land" name="has_land">
                        </div>

                        <div>
                            <label for="has_new">Neuf</label>
                            <input type="checkbox" id="has_new" name="has_new">
                        </div>
                    </div>

                    <div>
                        <label for="photos">Photos de votre bien<span class="required-indicator">*</span></label>
                        <input type="file" id="photos" name="photos" accept="image/*" multiple required>
                    </div>


                    <div>
                        <button type="submit" value="submit-search" class="a-button h-bg-primary h-color-white">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
