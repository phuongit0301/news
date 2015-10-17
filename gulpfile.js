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
var paths = {
	'bower_base_path': './vendor/bower_components/',
	'bootstrap': './vendor/bower_components/bootstrap-sass/assets/'
};


elixir(function(mix) {
	mix.sass('style.scss')
	mix.sass('layout.scss')
    mix.sass('app.scss')
	.copy(paths.bootstrap + 'stylesheets/', 'resources/assets/sass')
	.copy([paths.bootstrap + 'fonts/bootstrap', paths.bower_base_path + 'font-awesome/fonts'], 'public/fonts')
	.copy(paths.bootstrap + 'javascripts/bootstrap.js', 'public/js/vendor/bootstrap.js')
	.copy(paths.bower_base_path + 'jquery/dist/jquery.min.js', 'public/js/vendor/jquery.js')
	.copy(paths.bower_base_path + 'font-awesome/css/font-awesome.min.css', 'public/css/font-awesome.css');
});
