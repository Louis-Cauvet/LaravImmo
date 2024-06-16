<header id="header">
    <a href="{{ route('homepage') }}">
        <img src="/resources/img/logo.png" alt="logo" class="site-logo">
    </a>
    <nav>
        <ul>
            <li><a href="{{ route('homepage') . '#anchor-agency' }}">Notre agence</a></li>
            <li><a href="{{ route('sale-form') }}">Je souhaite vendre</a></li>
            <li><a href="{{ route('contact') }}">Nous contacter</a></li>
        </ul>
        <a href="#" class="a-button h-bg-secondary h-color-white">
            <i class="fa-solid fa-user"></i>Connexion
        </a>
    </nav>
    <button class="burger-menu">
        <div class="burger-body"></div>
    </button>
</header>
