<section class="search-bar">
    <form class="limited-width" action="{{ route('search-properties') }}" method="GET">
        @csrf
        <span class="radio-inputs">
            <div>
                <input type="radio" id="radio-sale" name="property-status" value="acheter" @if(isset($request)) {{ $request->input('property-status') == 'acheter' ? 'checked' : '' }} @else checked @endif>
                <label for="radio-sale">Acheter</label>
            </div>
            <div>
                <input type="radio" id="radio-rental" name="property-status" value="louer" @if(isset($request)) {{ $request->input('property-status') == 'louer' ? 'checked' : '' }} @endif>
                <label for="radio-rental">Louer</label>
            </div>
        </span>

        <span class="not-radio-inputs">
            <select name="property-type" id="select-type" required>
                <option value="maison" @if(isset($request)) {{ $request->input('property-type') == 'maison' ? 'selected' : '' }} @endif>Maison</option>
                <option value="appartement" @if(isset($request)) {{ $request->input('property-type') == 'appartement' ? 'selected' : '' }} @endif>Appartement</option>
                <option value="terrain" @if(isset($request)) {{ $request->input('property-type') == 'terrain' ? 'selected' : '' }} @endif>Terrain</option>
            </select>

            <input type="text" id="text-keywords" name="property-keywords" placeholder="Mots-clés" @if(isset($request)) value="{{ $request->input('property-keywords') }}" @endif/>

            <input type="text" id="text-city" name="property-city" placeholder="Ville" @if(isset($request)) value="{{ $request->input('property-city') }}" @endif/>

            <input type="number" id="number-min-price" name="property-min-price" step="0.10" placeholder="Budget min." @if(isset($request)) value="{{ $request->input('property-min-price') }}" @endif/>
            <input type="number" id="number-max-price" name="property-max-price" step="0.10" placeholder="Budget max." @if(isset($request)) value="{{ $request->input('property-max-price') }}" @endif/>
        </span>

        <button type="submit" value="submit-search" class="a-button h-bg-primary">Rechercher<i class="fas fa-search"></i></button>
    </form>
</section>
