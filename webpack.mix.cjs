const mix = require('laravel-mix');
const glob = require('glob');

mix.js([
    'resources/js/app.js',
    'resources/js/bootstrap.js'
], 'public/js')

mix.postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
    require('autoprefixer'),
])

mix.copy('resources/img', 'public/img');
