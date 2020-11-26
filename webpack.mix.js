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
  'public/vendor/css/vegas.min.css',
  'public/static/css/calendario.css',
  'public/static/css/owl.carousel.min.css',
  'public/static/css/owl.theme.default.min.css',
  'public/static/css/home.min.css',
  'public/static/css/bricklayer.min.css',
  'public/static/css/interne.css',
  'public/static/css/bootstrap-italia_1.2.0.min.css',
  'public/static/css/titilliumwebfont.css',
  'public/static/css/cagliari.min.css',
  'public/static/css/cagliari-print.min.css',
],'public/build/gulliver.min.css');


mix.scripts([
  'public/vendor/js/jqueryV1.min.js',
  'public/vendor/js/vegas.js',
  'public/static/js/jquery-3.3.1.min.js',
  'public/static/js/popper.min.js',
  'public/static/js/bootstrap-italia.bundle_1.2.0.min.js',
  'public/static/js/cagliari.min.js',
  'public/static/js/jquery-ui.js',
  'public/static/js/i18n/datepicker-it.js',
  'public/static/js/bricklayer.min.js',
  'public/static/js/calendario.js',
  'public/vendor/js/zepto.min.js',
  'public/static/js/owl.carousel.min.js',
],'public/build/gulliver.min.js');
