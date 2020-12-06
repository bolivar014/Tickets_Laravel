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

mix
    // Esquema de archivos Css & JS que deseamos procesar
    .styles([
        // Ruta de los archivos Css que necesitamos
        'resources/vendor/fontawesome-free/css/all.min.css',
        'resources/css/adminlte.css',
    ], 'public/css/app.css')

    // 
    .js('resources/js/app.js', 'public/js')

    .scripts([
        // Ruta de los archivos JS que necesitamos
        'resources/vendor/jquery/jquery.min.js',
        'resources/vendor/bootstrap/js/bootstrap.bundle.min.js',
    ], 'public/js/vendor.js')

    .copy('resources/vendor/fontawesome-free/webfonts', 'public/webfonts')
    .copy('resources/img', 'public/img')

    .version()
    // .sass('resources/sass/app.scss', 'public/css');
