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
 "public/vendor/css/bootstrap.js"
 "public/vendor/css/jquery.js"
 "public/vendor/css/jquery.fittext.js"
 "public/vendor/css/jquery-ui.js"
 "public/vendor/css/moment.js"
 */


mix.styles([
  'public/vendor/css/bootstrap.css',
  'public/vendor/css/jquery-ui.css',
  'public/vendor/css/font-awesome.min.css',
  'public/vendor/css/vegas.min.css',
  'public/static/css/calendario.css',
  'public/static/css/interne.css',
  'public/static/css/bootstrap-italia_1.2.0.min.css',
  'public/static/css/titilliumwebfont.css',
  'public/static/css/cagliari.min.css',
  'public/static/css/cagliari-print.min.css',
],'public/build/gulliver.min.css');
