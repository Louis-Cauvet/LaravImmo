<section class="search-bar">
    <form class="limited-width" action="{{ route('search-property') }}" method="POST">
        @csrf
        <span class="radio-inputs">
            <div>
                <input type="radio" id="radio-sale" name="property-status" value="acheter" checked>
                <label for="radio-sale">Acheter</label>
            </div>
            <div>
                <input type="radio" id="radio-rental" name="property-status" value="louer">
                <label for="radio-rental">Louer</label>
            </div>
        </span>

        <span class="not-radio-inputs">
            <select name="property-type" id="select-type" required>
                <option value="maison">Maison</option>
                <option value="appartement">Appartement</option>
                <option value="terrain">Terrain</option>
            </select>

            <input type="text" id="text-keywords" name="property-keywords" placeholder="Mots-clés"/>

            <input type="text" id="text-city" name="property-city" placeholder="Ville"/>

            <input type="number" id="number-min-price" name="property-min-price" step="0.10" placeholder="Budget min."/>
            <input type="number" id="number-max-price" name="property-max-price" step="0.10" placeholder="Budget max."/>
        </span>

        <button type="submit" value="submit-search" class="a-button h-bg-primary">Rechercher<i class="fas fa-search"></i></button>
    </form>
</section>
