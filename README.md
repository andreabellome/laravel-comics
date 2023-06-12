Progetto Laravel
Questo progetto Laravel è stato creato con l'obiettivo di fornire una base solida per lo sviluppo di applicazioni web utilizzando il framework Laravel versione 9.2.

Prerequisiti
Prima di procedere all'installazione del progetto, assicurati di avere i seguenti prerequisiti installati sul tuo sistema:

PHP 7.4 o versione successiva
Composer
Node.js e npm
Installazione
Segui i passaggi di seguito per installare correttamente il progetto sul tuo ambiente di sviluppo:

Clona il repository o crea una nuova cartella tramite il comando da terminale:

lua
Copy code
composer create-project --prefer-dist laravel/laravel:^9.2 [Nome_repo]
Apri la cartella appena creata utilizzando il tuo editor di codice preferito.

Nella barra laterale del tuo editor di codice, cerca l'opzione "Source Control" o "Controllo di origine" e aprila.

Fai clic sul bottone "Clone" o "Clona" per pubblicare il repository su GitHub.

Seleziona l'opzione "Public" o "Pubblica" per rendere il repository visibile a tutti.

ATTIVAZIONE DEL SERVER: Una volta completata la pubblicazione su GitHub, apri il terminale nella cartella del progetto e avvia il server utilizzando il seguente comando:

Copy code
php artisan serve
In un nuovo terminale, esegui il comando seguente per installare il pacchetto pacificdev/laravel_9_preset:

bash
Copy code
composer require pacificdev/laravel_9_preset
Esegui il comando seguente per configurare l'interfaccia utente di Laravel utilizzando Bootstrap:

Copy code
php artisan preset:ui bootstrap
Esegui il comando seguente per installare le dipendenze di npm:

Copy code
npm install
Avvia il server di sviluppo con il comando:

arduino
Copy code
npm run dev
Riavvia il server Laravel precedentemente avviato con il comando:

Copy code
php artisan serve
Nel tuo file di layout principale (solitamente denominato app.blade.php), aggiungi il seguente codice all'interno del tag <head></head> per abilitare l'integrazione di Bootstrap con Vite:

html
Copy code
@vite('resources/js/app.js')
Il tuo layout dovrebbe essere simile a questo:

html
Copy code
<head>
    ...
    @vite('resources/js/app.js')
</head>
