const {mix} = require('laravel-mix');

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
// mix.options({
//     processCssUrls: false // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
// });
mix.styles([
    //JS DÙNG CHUNG CHO FRONEND VÀ BACKEND
    'bower_components/jquery/dist/jquery.min.js',
    'bower_components/bootstrap/dist/js/bootstrap.min.js',
], '../js/core.common.js')

    //CSS DÙNG CHUNG CHO FRONTEND VÀ BACKEND
    .styles([
        'bower_components/bootstrap/dist/css/bootstrap.min.css',
        'bower_components/font-awesome/css/font-awesome.min.css',
    ], '../css/core.common.css')

    //JS CORE FRONTEND
    .styles([
        'bower_components/nivo-slider/jquery.nivo.slider.pack.js',
        'bower_components/owl.carousel/dist/owl.carousel.min.js',
        'bower_components/slick-carousel/slick/slick.js',
        'bower_components/wow/dist/wow.min.js',
        'bower_components/waypoints/lib/noframework.waypoints.min.js',
        'bower_components/countUp.js/dist/countUp.min.js',
    ], '../js/core.frontend.js')

    //CSS CORE FRONTEND
    .styles([
        'bower_components/nivo-slider/nivo-slider.css',
        'bower_components/owl.carousel/dist/assets/owl.carousel.min.css',
        'bower_components/owl.carousel/dist/assets/owl.theme.default.min.css',
        'bower_components/slick-carousel/slick/slick.css',
        'bower_components/animate.css/animate.min.css'

    ], '../css/core.frontend.css')
    .sass('resources/assets/sass/frontend.scss', '../../css/frontend.css').options({processCssUrls: false})

    //JS CONTROL FRONTEND
    .styles('resources/assets/js/scripts.js', '../js/scripts.js')
    .copy([
        'bower_components/bootstrap/fonts/**',
        'bower_components/font-awesome/fonts/**'
    ], '../fonts')
    .copy([
        'bower_components/nivo-slider/themes',
    ], '../css/themes', false)


// mix.styles([
//     'bower_components/jquery/dist/jquery.min.js',
//     'bower_components/bootstrap/dist/js/bootstrap.min.js',
//     'node_modules/jquery.mmenu/dist/js/jquery.mmenu.min.js',
//     'bower_components/slick-carousel/slick/slick.js',
//     'bower_components/wow/dist/wow.min.js'
// ], 'public/js/core.js')
//     .styles([
//         'bower_components/bootstrap/dist/css/bootstrap.min.css',
//         'bower_components/font-awesome/css/font-awesome.min.css',
//         'node_modules/jquery.mmenu/dist/css/jquery.mmenu.all.css',
//         'bower_components/slick-carousel/slick/slick.css',
//         'bower_components/animate.css/animate.min.css'
//     ], 'public/css/app.css')
//     .copy([
//         'bower_components/bootstrap/fonts/**',
//         'bower_components/font-awesome/fonts/**'
//     ], 'public/fonts')
//     .sass('resources/assets/sass/frontend.scss', 'public/css').options({processCssUrls: false})
//     .styles([
//         'resources/assets/js/scripts.js'
//     ], 'public/js/scripts.js')

