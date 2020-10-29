const mix = require('laravel-mix')

mix.js('./assets/src/app.js', './assets/js')
    .sass('./assets/src/app.scss', './assets/css')
    .setPublicPath('assets');