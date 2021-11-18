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

mix.js('resources/js/app.js', 'public/js').vue()
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .postCss('resources/nozha-rtl-dashboard-template/css/normalize.css', 'public/nozha-rtl-dashboard-template/css/normalize.css')
    .postCss('resources/nozha-rtl-dashboard-template/css/fontawsome/all.min.css', 'public/nozha-rtl-dashboard-template/css/fontawsome/all.min.css')
    .postCss('resources/nozha-rtl-dashboard-template/css/main.css', 'public/nozha-rtl-dashboard-template/css/main.css')
    .copy('resources/nozha-rtl-dashboard-template/font/iranyekanwebbold.ttf', 'public/nozha-rtl-dashboard-template/fonts/iranyekanwebbold.ttf')
    .copy('resources/nozha-rtl-dashboard-template/font/iranyekanweblight.ttf', 'public/nozha-rtl-dashboard-template/fonts/iranyekanweblight.ttf')
    .copy('resources/nozha-rtl-dashboard-template/font/iranyekanwebregular.ttf', 'public/nozha-rtl-dashboard-template/fonts/iranyekanwebregular.ttf')
    .copyDirectory('resources/nozha-rtl-dashboard-template/img', 'public/nozha-rtl-dashboard-template/img')
    .copyDirectory('resources/nozha-rtl-dashboard-template/svg', 'public/nozha-rtl-dashboard-template/svg')
    .js('resources/nozha-rtl-dashboard-template/js/vendor/modernizr.js', 'public/nozha-rtl-dashboard-template/js/vendor/modernizr.js')
    .js('resources/nozha-rtl-dashboard-template/js/main.js', 'public/nozha-rtl-dashboard-template/js/main.js')
    .webpackConfig(require('./webpack.config'));

if (mix.inProduction()) {
    mix.version();
}
