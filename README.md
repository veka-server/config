# config
Une classe de gestion de fichier de configuration pour mon framework

## Utilisation

Initialisation au plus tôt dans le code
```php
// initialise le singleton de configuration
\VekaServer\Config\Config::getInstance(__DIR__.'/config/config.php');
```

Recuperation d'une valeur
```php
\VekaServer\Config\Config::getSetting('db_pass');
```

## Exemple de fichier de config
```php
<?php

return array(

    // Environnement
    "ENV"   => 'DEV', // DEV / PROD

    // BDD
    "db_user" => 'root',
    "db_pass" => 'root',
    "db_host" => 'localhost',
    "db_name" => 'mabase'

);
```


