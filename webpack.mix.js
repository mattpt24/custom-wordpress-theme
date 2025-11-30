let mix = require('laravel-mix');

mix.ts('src/ts/script.ts', './') 
   .sass('src/scss/style.scss', './')
   .setPublicPath('./');