let mix = require('laravel-mix');
mix.sass('resources/main.scss', 'public')
.js('resources/main.js', 'public');