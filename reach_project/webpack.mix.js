const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
        .sass('resources/sass/style-arabic.scss', 'public/css/style-arabic.css') 

        .sass('resources/sass/about.scss', 'public/css/about.css') 
        .sass('resources/sass/admin_login.scss', 'public/css/admin_login.css') 

        .sass('resources/sass/style-english.scss', 'public/css/style-english.css');   

