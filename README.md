# passi per installare il progetto

1- Creare la cartella tramite comando da terminale: composer create-project --prefer-dist laravel/laravel:^9.2 [Nome_repo]
2- aprire la cartella creata e basta su vs code
3- cliccare nella sidebar di sinistra su source controll
4- cliccare sul bottone blu per "pubblica su github"
5- scegliere pubblica repo con visibilità "pubblica"
6- ATTIVARE IL SERVER: terminata la pubblicazione su github, apire il terminale di vs code integrato o il terminale di sistema nella cartella progetto e lanciare il comando: php artisan serve
7- in un altro terminale aperto sulla cartella del progetto, lanciare : composer require pacificdev/laravel_9_preset
8 - poi lanciare il comando da terminale: php artisan preset:ui bootstrap
9 - lanciare il comando da terminale: npm install
10 - lanciare il comando da terminale per attivare i secondo server da mantenere attivo durante il lavoro: npm run dev
11 - riavviare invece il server attivato con il comando: php artisan serve
12 - inserire nel <head></head> del layout questo codice per poter intepretare bootstrap con vite: @vite('resources/js/app.js')
    Il layout diventerà:
        <head>
            ....
            @vite('resources/js/app.js')
        </head>
