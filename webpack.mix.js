let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'js')
    .scripts([
        'resources/assets/js/particles.js',
        'resources/assets/js/particles-config.js'
    ], 'public/js/all-particles.js')
   .sass('resources/assets/sass/app.scss', 'css')
   .browserSync({
        proxy: 'cityofcompanies.test/',
        port: 8000
    })
    .version();