<header id="header">
    <a href="{{ route('homepage') }}">
        <img src="/resources/img/logo.png" alt="logo" class="site-logo">
    </a>
    <nav>
        <ul>
            <li><a href="{{ route('homepage') . '#anchor-agency' }}">Notre agence</a></li>
            <li><a href="{{ route('listing-property') }}">Découvrir nos biens</a></li>
            <li><a href="{{ route('sale-form') }}">Je souhaite vendre</a></li>
        </ul>
        @include('components.header-user')
    </nav>
    <button class="burger-menu">
        <div class="burger-body"></div>
    </button>
</header>
