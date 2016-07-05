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
        'libs/font-awesome.min.css',
        'app.css',
    ]);
    mix.scripts([
        'libs/jquery.js',
        'libs/bootstrap.min.js',
        'libs/select2.min.js',
        'libs/a322070dac.js'
    ]);
});