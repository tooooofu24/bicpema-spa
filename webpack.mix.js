const mix = require('laravel-mix');

require('laravel-mix-eslint');

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

if (!mix.inProduction()) {
    mix.eslint({
        fix: true,
        extensions: ['js', 'vue']
    });
}

mix.sass('resources/sass/app.scss', 'public/css')
    .js('resources/js/app.js', 'public/js')
    .vue();

mix.version();
