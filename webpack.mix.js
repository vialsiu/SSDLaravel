const mix = require('laravel-mix');

mix
  .js('resources/js/app.js', 'public/js')
  .sass('resources/scss/app.scss', 'public/css', {
      sassOptions: {
        outputStyle: 'compressed'
      }
  })
  .styles(['resources/css/app.css'], 'public/css/custom.css'); 

if (mix.inProduction()) {
  mix.version();
}
