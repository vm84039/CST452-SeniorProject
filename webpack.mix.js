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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
mix.postCss('resources/css/app.css', 'public/css', [
    require('postcss-custom-properties'),
    require("tailwindcss"),
]);
mix.postCss('resources/css/Pretty-Registration-Form.css', 'public/css');
mix.postCss('resources/css/sidebar.css', 'public/css');
mix.postCss('resources/css/sidebar-1.css', 'public/css');
mix.postCss('resources/css/dh-card-image-left-dark.css', 'public/css');
mix.postCss('resources/css/Customizable-Background--Overlay.css', 'public/css');
mix.postCss('resources/css/custom.css', 'public/css');
mix.postCss('resources/css/News-Cards.css', 'public/css');

