TODO list del progetto

Analisi e lista dei tasks
ok - modifa env con nome del database   
OK - installazione pacchetto debug 
OK installazione lingua italiana e modifica config/app.php = 'locale' => 'it',
Ok dare permessi cartella:  sudo chmod -R 777 storage/
- creare sistema di login e registrazione https://codeanddeploy.com/blog/laravel/laravel-8-authentication-login-and-registration-with-username-or-email
- creare i controller i modelli e le migrazioni

registrato come: user: testlaravel - test1234

- creare Users, Prodotti, Categorie, Ordini, ordiniProdotti
- creare le rotte 
- realizzazione di un template in blade (con parti admin e no) e bootstrap (da importare)
- creare un sistema di log nei controller 
- creare un Faker per i Prodotti e uno per gli Ordini e Ordini Prodotti
- CRUD gestione prodotti (ADMIN)
- creare login e autenticazione per acquisto
- creare il carrello (Session prodotti)
- al checkout

Struttura del sito
index (tutti prodotti e la vetrina mostra le categorie e i prodotti)
Cerca (->productCOntroller search)

CONTROLLER
loginController  con iscrizione (user)
admin lo creiamo a mano con Tinker

faker popolare il db

-> productsController (resourse)
        search
        getProduct

cartController



VISTE
prodotti/index
prodotti/scheda + aggiungi al carrello

carrello/index(mostra)
carrello/checkout (controlla se non sei loggato ti devi / loggare o iscrevere e loggare)