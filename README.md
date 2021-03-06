# Creating a package

    https://www.youtube.com/watch?v=BzEskEyMsL4
    https://www.youtube.com/watch?v=3HPTh-EMY2U

### Struttura
```
/packages/edisyst/simplestubs/
|- composer.json
|- src/
    |- routes.php
    |- SimplestubsController.php
    |- SimplestubsServiceProvider.php
    |- views/
        |- add.blade.php
```

Ogni volta che creo un file poi lo devo spostare là dentro e rinominare i namespace

### Workflow
Inizializzo dentro il pkg `composer init` oppure lo creo a mano da un template di base 

Nel **composer.json** del progetto aggiungo negli auto-load 
`"Edisyst\\Simplestubs\\": "packages/edisyst/simplestubs/src"`

Lancio `composer dump-autoload`

Creo il suo **Service Provider**
`php artisan make:provider SimplestubsServiceProvider`

Creo **routes.php** (la classe Route la scrivo senza namespace)

Nel config/app.php aggiungo il provider
`Edisyst\Simplestubs\SimplestubsServiceProvider::class,`

Creo il **Controller**
`php artisan make:controller SimplestubsController`

Registro il file delle rotte e le classi nel **Service Provider**

