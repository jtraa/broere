const mix = require('laravel-mix');
require('laravel-mix-imgmin');

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

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
    require('autoprefixer'),
    ])
    .vue()
    .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'resources/css/style.css',
    'resources/css/form.css',
    'resources/css/menu.css',
], 'public/css/custom.css')

mix.js('resources/js/main.js', 'public/js');

mix.imgmin({
    input: 'resources/images',
	publicPath: 'public',
    output: 'images',
    tinyPngKey: 'n8HykG8XXSG2LWGF25glYJlXnYT9Tb3q',
    debug: false
});
