<footer>
    <div class="footer-compagny">
        <div class="compagny-contact">
            <div class="rounded">
                <h2>Larav'Immo</h2>
                <div class="compagny-adress">
                    <i class="fa-solid fa-location-dot"></i>
                    <div>
                        <p>24 Rue Edison</p>
                        <p>69003 Lyon</p>
                    </div>
                </div>
                <div class="compagny-links">
                    <span class="a-button h-bg-primary h-color-white">07 82 75 64 98</span>
                    <a href="{{ route('contact') }}" class="a-button h-bg-primary h-color-white">Nous contacter</a>
                </div>
            </div>
        </div>
        <div class="compagny-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.7033194786063!2d4.845115975776697!3d45.75709341384933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea5db0cd7601%3A0x93b6e1cf49ab2e44!2s24%20Rue%20Edison%2C%2069003%20Lyon!5e0!3m2!1sfr!2sfr!4v1717349154790!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="footer-bottom limited-width">
        <ul class="footer-bottom-left">
            <li>
                <a href="#_">Mentions légales</a>
            </li>
            <li>
                <a href="#_">Données personnelles</a>
            </li>
            <li>
                <a href="{{ route('contact') }}">Contact</a>
            </li>
        </ul>
        <a href="{{ route('homepage') }}">
            <img src="/resources/img/logo.png" alt="texte alternatif" class="footer-logo">
        </a>
        <div class="footer-bottom-right">
            <ul>
                <li>
                    <i class="fa-brands fa-linkedin"></i>
                </li>
                <li>
                    <i class="fa-brands fa-youtube"></i>
                </li>
                <li>
                    <i class="fa-brands fa-instagram"></i>
                </li>
            </ul>
            <p>2024 © Louis Cauvet</p>
        </div>
    </div>

</footer>
