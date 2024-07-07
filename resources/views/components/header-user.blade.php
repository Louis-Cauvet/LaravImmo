<?php
session_start();
?>

@if(isset($_SESSION['user']))
    @php
        $user = $_SESSION['user'];
        $route = $user['role'] === 'Admin' ? route('admin-account') : route('user-account');
    @endphp
    <div class="account-buttons">
        <a href="{{ $route }}" class="a-button h-bg-secondary h-color-white" title="Mon compte">
            <i class="fa-solid fa-user"></i>
            {{ $user['prenom'] }} {{ $user['nom'] }}
        </a>
        <a href="{{ route('logout-user') }}" class="logout-button a-button h-bg-primary h-color-white" title="Déconnexion">
            <i class="fa-solid fa-user-slash"></i>
        </a>
    </div>
@else
    <button id="open-login-modal" class="a-button h-bg-secondary h-color-white">
        <i class="fa-solid fa-user"></i>
        Connexion
    </button>
@endif
