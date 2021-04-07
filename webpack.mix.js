const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    'public/static/css/jquery-ui.css',
    'public/static/css/owl.carousel.min.css',
    'public/static/css/owl.theme.default.min.css',
    'public/static/css/home.min.css',
    'public/static/css/bricklayer.min.css',
],'public/build/gulliver.min.css');

mix.js([
    'public/static/js/jquery-3.3.1.min.js',
    'public/static/js/popper.min.js',
    'public/static/js/bootstrap-italia.bundle_1.2.0.min.js',
    'public/static/js/cagliari.min.js',
    'public/static/js/jquery-ui.js',
    'public/static/js/bricklayer.min.js',
    'public/static/js/calendario.js'
], 'public/build/gulliver.min.js')
