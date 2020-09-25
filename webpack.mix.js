const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss')
require('laravel-mix-purgecss');

// mix.browserSync('delay.test');

// mix.js('resources/js/min-back.js', 'public/js')
//     .sass('resources/sass/back/min-back.sass', 'public/css')

mix.js('resources/js/min.js', 'public/js')
    .sass('resources/sass/min.sass', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })
    .purgeCss()


