var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

// elixir(function(mix) {
//     mix.sass('app.scss');
// });


elixir(function(mix) {
    mix.less('app.less', 'resources/assets/css');

    mix.styles([
        'libs/select2.min.css',
        'app.css',
        'libs/font-awesome.css',
        'libs/flexslider.css',
        'libs/styles-1.css',
        'my_style.css',
    ]);
    mix.scripts([
        'libs/jquery.js',
        'libs/bootstrap.min.js',
        'libs/select2.min.js',
        'libs/a322070dac.js',
        'libs/modernizr.min.js',
        'libs/jquery.easing.1.3.min.js',
        'libs/waypoints.min.js',
        'libs/jquery.easypiechart.js',
        'libs/twitterFetcher_min.js',
        'libs/jquery.flexslider.min.js',
        'libs/jquery.fitvids.js',
        'libs/contact.js',
        'libs/scripts.js',
    ]);


});