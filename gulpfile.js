var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
<<<<<<< HEAD
 | for your Laravel application. By default, we are compiling the Sass
=======
 | for your Laravel application. By default, we are compiling the Less
>>>>>>> 44993b7528930e302201e0bdf122e0afa196aa41
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
<<<<<<< HEAD
    mix.sass('app.scss')
        .scripts([

            'libs/sweetalert-dev.js'
        ],'./public/js/libs.js')

        .styles([

         'libs/sweetalert.css'
        ],'./public/css/libs.css');
=======
    mix.less('app.less');
>>>>>>> 44993b7528930e302201e0bdf122e0afa196aa41
});
