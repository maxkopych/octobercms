var elixir = require('laravel-elixir');
require('laravel-elixir-livereload');

//you probably can do it now without laravel elixir but I don't know how


elixir.config.assetsPath = 'themes/mytheme/assets/';
elixir.config.publicPath = 'themes/mytheme/assets/compiled/';

elixir(function(mix){

  mix.sass('style.scss');

  mix.scripts([
    'jquery.js',
    'main.js'
  ]);

  //npm install laravel-elixir-browsersync-official --save-dev
  //it will sinc it with url ... AWESOME!!!!
  mix.browserSync({
    files: [
      'themes/mytheme/assets/compiled/css/*.css',
      'themes/mytheme/*/*.htm',
      'themes/mytheme/assets/compiled/js/*.js'
    ],
    proxy: 'laravel-october-cms.local'
  });
});

//To run it type "gulp watch"--- for gulp 4^
