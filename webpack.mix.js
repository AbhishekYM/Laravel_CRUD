const mix = require('laravel-mix');
mix.js('resources/js/app.js', 'public/js')
mix.js('resources/js/jquery.min.js', 'public/js')
mix.js('resources/js/bootstrap.min.js', 'public/js')
    .postCss('resources/css/style.css', 'public/css', [])
    .postCss('resources/css/sb-admin.min.css', 'public/css', []);