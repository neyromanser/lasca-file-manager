const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

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

elixir.config.sourcemaps = false;

elixir(function(mix) {

    var assetsPath  = './vendor/neyromanser/lasca-file-manager/resources/assets/';
    //var publicPath  = './public/admin/file-manager/assets/';
    var publicPath  = './vendor/neyromanser/lasca-file-manager/public/assets/';

    mix.styles([assetsPath+'css/*.css'], publicPath+'css/app.css');

    mix.scripts([
        assetsPath + 'js/*.js'
    ], publicPath+'js/app.js');

    mix.scripts([
        assetsPath + 'js/*.js'
    ], publicPath+'js/app.js');

    ['dark','default'].forEach(function(item, i, arr) {
        mix.styles([assetsPath+'themes/'+item+'/*.css'], publicPath+'themes/'+item+'/style.css');

        mix.copy(assetsPath+'themes/'+item+'/img', publicPath+'themes/'+item+'/img');

        mix.scripts([
            assetsPath + 'themes/'+item+'/*.js'
        ], publicPath+'themes/'+item+'/init.js');
    });


});
