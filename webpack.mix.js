const mix = require('laravel-mix');

    // Sass compilation & CSS conversion
mix.sass('resources/sass/main.scss', '/resources/css/app.css')
    // JS compilation
    .js('resources/js/app.js', 'public/resources/js/app.js')
    // Images's tranfer
    .copyDirectory('resources/img', 'public/resources/img')

    // Allow debug
    .sourceMaps();
