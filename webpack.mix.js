const mix = require('laravel-mix');

/*
 |---------------------------------------------------------------------------
 | Mix Asset Management
 |---------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining Webpack build steps for your
 | Laravel application. We compile SCSS & PostCSS while ensuring Tailwind works.
 |
 */

// ✅ Compile SCSS (app.scss) to public/css/app.css
mix.sass('resources/scss/app.scss', 'public/css')
  .options({
    postCss: [
      require('postcss-import'),
      require('tailwindcss'),
      require('postcss-nested'),
      require('autoprefixer'),
    ],
  });

// ✅ Compile JavaScript
mix.js('resources/js/app.js', 'public/js');

// ✅ Enable Versioning in Production for Cache Busting
if (mix.inProduction()) {
  mix.version();
}
