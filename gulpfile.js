var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    //mix.less('app.less');
    mix.copy('bower_components/bootstrap/dist/fonts', 'public/assets/fonts');
    mix.copy('bower_components/font-awesome/fonts', 'public/assets/fonts');
    mix.styles([
        'bower_components/bootstrap/dist/css/bootstrap.css',
        'bower_components/fontawesome/css/font-awesome.css',
        'bower_components/bootstrap-table/dist/bootstrap-table.css',
        'resources/css/sb-admin-2.css',
        'resources/css/select2.css',
        'resources/css/timeline.css',
        'resources/css/bootstrap-select.css',
        'resources/css/custom.css'
    ], 'public/assets/stylesheets/styles.css', './');
    mix.scripts([
        'bower_components/jquery/dist/jquery.js',
        'bower_components/d3/d3.js',
        'bower_components/bootstrap/dist/js/bootstrap.js',
        'bower_components/Chart.js/Chart.js',
        'bower_components/metisMenu/dist/metisMenu.js',
        'resources/js/sb-admin-2.js',
        'resources/js/select2.js',
        'resources/js/bootstrap-select.js',
        'resources/js/jquery.validate.min.js',
        'bower_components/bootstrap-table/dist/bootstrap-table.js',
        'bower_components/bootstrap-table/dist/locale/bootstrap-table-id-ID.js'
        //'resources/js/custom.js',
        //'resources/js/dndTree.js'
    ], 'public/assets/scripts/scripts.js', './');
});
