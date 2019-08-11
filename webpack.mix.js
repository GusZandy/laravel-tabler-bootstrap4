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
    .sass('resources/sass/app.scss', 'public/css');

mix.webpackConfig({
    resolve: {
        alias: {
            'circle-progress': 'jquery-circle-progress',
            // 'core': path.resolve(__dirname, 'node_modules/tabler-ui/dist/assets/js/core.js'),
            'vector-map': 'jvectormap'
        }
    }
});


mix.js('resources/js/tabler.js', 'public/js')
    .sass('resources/sass/tabler.scss', 'public/css');

mix.autoload({
    jquery: [ '$', 'jQuery', 'jquery', 'window.jQuery'],
});

mix.extract([
    'lodash',
    'bootstrap',
    'bootstrap-datepicker',
    'chart.js',
    'jquery',
    'jquery-circle-progress',
    'jvectormap',
    'moment',
    'select2',
    'selectize',
    'sparkline',
    'tablesorter',
    'vue'
], 'public/js/vendor.js');

mix.version();

mix.setPublicPath('public');
