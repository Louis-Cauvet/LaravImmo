@if(Auth::check())
    <p>Bonjour, {{ Auth::user()->prenom }} {{ Auth::user()->nom }}!</p>
@else
    <p>Vous n'êtes pas connecté.</p>
    <p>Session ID: {{ session()->getId() }}</p>
@endif
