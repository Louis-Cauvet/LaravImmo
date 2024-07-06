<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>
            // Define a global variable for the CSRF token to use in JS scripts
            window.Laravel = {
                csrfToken: '{{ csrf_token() }}'
            };
        </script>

        <title>@yield('title')</title>
        <link rel="icon" type="image/x-icon" href="/resources/img/logo.png">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="/resources/css/app.css">
    </head>
    <body>
        <!-- Affichage d'un message à l'utilisateur si besoin -->
        @if (Session::has('user_alert_message'))
            <script>
                alert('{{ Session::get('user_alert_message') }}');
            </script>
        @endif

        <a href="#header" class="to-top">
            <i class="fa-solid fa-chevron-up"></i>
        </a>
        @include('components/login-modal')
        @include('components/header')
        @yield('content')
        @include('components/footer')
        <script type = "text/javascript" src="/resources/js/app.js"></script>
    </body>
</html>
