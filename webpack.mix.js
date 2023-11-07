// webpack.mix.js

/* Prende Laravel Mix e lo salva all’interno della variabile mix */
let mix = require('laravel-mix');	

/* Questo oggetto mix ha una serie di proprietà particolari tra cui sass */
mix

.js('resources/js/main_vue.js', 'js')
.sass('resources/css/Pages/home.scss', 'css')
.sass('resources/css/Pages/gallery.scss', 'css')
.sass('resources/css/Pages/who.scss', 'css')
.sass('resources/css/Pages/bookstore.scss', 'css')
.sass('resources/css/Pages/contacts.scss', 'css')
.sass ('resources/css/style.scss', 'css')
.sass('resources/css/Media Query Pages/mq Home.scss', 'css')
.setPublicPath('public')


/* Importante: disabilita la compilazione automatica degli url immagine */

.options({
    processCssUrls: false
})


mix.disableNotifications();


/* .js('src/app.js', 'js') // Prende il file dalla cartella search, lo compila e mette il nuovo in dist\js
.sass ('resources/css/mediaquery.scss', 'css')
npm.copy('src/img/', 'public/images/') /* Copia le immagini locali in src/img nella cartella public/images */